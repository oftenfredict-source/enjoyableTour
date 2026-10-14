(function () {
   document.querySelectorAll('.et-month').forEach(function (button) {
      button.addEventListener('click', function () {
         var note = document.getElementById('et-month-note');
         if (note) note.textContent = button.getAttribute('data-note');
         document.querySelectorAll('.et-month').forEach(function (item) { item.classList.remove('is-open'); });
         button.classList.add('is-open');
      });
   });

   var fitForm = document.getElementById('et-kili-fit');
   var fitData = document.getElementById('et-kili-match');
   if (fitForm && fitData) {
      var matches = JSON.parse(fitData.textContent);
      var showFit = function () {
         var key = fitForm.days.value + '-' + fitForm.hiking.value + '-' + fitForm.sleep.value;
         var match = matches[key];
         if (!match) return;
         document.querySelectorAll('.et-kili-route, .et-kili-detail, .et-plan-table tr').forEach(function (item) {
            item.classList.toggle('is-active', item.getAttribute('data-route') === match.slug);
         });
         document.getElementById('et-kili-why').textContent = match.why;
         history.replaceState(null, '', window.location.pathname + '?route=' + match.slug);
      };
      fitForm.addEventListener('change', showFit);
      if (!/[?&]route=/.test(window.location.search)) showFit();
   }

   document.querySelectorAll('.et-kili-route').forEach(function (button) {
      button.addEventListener('click', function () {
         var slug = button.getAttribute('data-route');
         document.querySelectorAll('.et-kili-route, .et-kili-detail, .et-plan-table tr').forEach(function (item) {
            item.classList.toggle('is-active', item.getAttribute('data-route') === slug);
         });
         var why = document.getElementById('et-kili-why');
         if (why && button.getAttribute('data-fit')) why.textContent = button.getAttribute('data-fit');
         history.replaceState(null, '', window.location.pathname + '?route=' + slug);
      });
   });

   var budgetForm = document.getElementById('et-budget-form');
   var budgetData = document.getElementById('et-budget-data');
   if (budgetForm && budgetData) {
      var rates = JSON.parse(budgetData.textContent);
      var renderBudget = function () {
         var days = clamp(budgetForm.days.value, 1, 21);
         var guests = clamp(budgetForm.guests.value, 1, 12);
         var nights = Math.max(0, days - 1);
         var selected = Array.prototype.map.call(budgetForm.querySelectorAll('input[name="parks[]"]:checked'), function (box) { return box.value; });
         if (!selected.length) selected = ['serengeti'];
         var vehicle = budgetForm.vehicle.value;
         var stay = budgetForm.stay.value;
         var weights = {};
         if (days >= selected.length) {
            var base = Math.floor(days / selected.length);
            var extra = days % selected.length;
            selected.forEach(function (key, index) { weights[key] = base + (index < extra ? 1 : 0); });
         } else {
            selected.slice(0, days).forEach(function (key) { weights[key] = 1; });
         }
         var feeLow = 0;
         var feeHigh = 0;
         var notes = [];
         Object.keys(weights).forEach(function (key) {
            var park = rates.parks[key];
            var parkDays = weights[key];
            feeLow += parkDays * park.low * guests;
            feeHigh += parkDays * park.high * guests * (1 + rates.vat);
            notes.push(park.name + ' ' + parkDays + (parkDays === 1 ? ' day' : ' days'));
         });
         var lines = [{
            label: 'Park conservation fees',
            low: feeLow,
            high: feeHigh,
            note: notes.join(', ') + '. Non-resident adult, per 24 hours. The higher figure includes 18% VAT.'
         }];
         if (weights.ngorongoro) {
            lines.push({
               label: 'Ngorongoro crater descent',
               low: rates.crater,
               high: rates.crater * (1 + rates.vat),
               note: 'One descent for the vehicle, shared by the group. Not charged per person.'
            });
         }
         if (vehicle === 'private') {
            lines.push({
               label: 'Private 4x4 and guide',
               low: rates.vehicle.private[0] * days,
               high: rates.vehicle.private[1] * days,
               note: 'Typical daily rate for the vehicle, for ' + days + (days === 1 ? ' day.' : ' days.')
            });
         } else {
            lines.push({
               label: 'Shared safari seat',
               low: rates.vehicle.shared[0] * days * guests,
               high: rates.vehicle.shared[1] * days * guests,
               note: 'Per person, per day, when joining other guests.'
            });
         }
         if (nights > 0) {
            var stayRate = rates.stay[stay];
            lines.push({
               label: stayRate[2],
               low: stayRate[0] * nights * guests,
               high: stayRate[1] * nights * guests,
               note: 'Typical per-person rate for ' + nights + (nights === 1 ? ' night' : ' nights') + '. Meals on safari are usually included.'
            });
         }
         var totalLow = lines.reduce(function (sum, line) { return sum + line.low; }, 0);
         var totalHigh = lines.reduce(function (sum, line) { return sum + line.high; }, 0);
         document.getElementById('et-budget-total').textContent = money(totalLow) + ' – ' + money(totalHigh);
         document.getElementById('et-budget-each').textContent = 'About ' + money(totalLow / guests) + ' – ' + money(totalHigh / guests) + ' per person.';
         document.querySelector('.et-plan-kicker').textContent = 'Planning range for ' + guests + (guests === 1 ? ' guest' : ' guests') + ', ' + days + ' days';
         var list = document.querySelector('.et-budget-lines');
         list.innerHTML = lines.map(function (line) {
            return '<li><div class="et-budget-row"><strong>' + line.label + '</strong><b>' + money(line.low) + ' – ' + money(line.high) + '</b></div><span>' + line.note + '</span></li>';
         }).join('');
         var names = selected.map(function (key) { return rates.parks[key].name; });
         var text = 'Hello Enjoyable Tour. Please quote a safari: ' + names.join(', ') + ', ' + days + ' days, ' + guests + ' guests, ' + vehicle + ' vehicle, ' + rates.stay[stay][2] + '. My planner range is ' + money(totalLow) + '–' + money(totalHigh) + ' for the group.';
         var link = document.getElementById('et-budget-wa');
         link.href = link.href.split('?')[0] + '?text=' + encodeURIComponent(text);
      };
      budgetForm.addEventListener('input', renderBudget);
      budgetForm.addEventListener('change', renderBudget);
   }

   var migrationData = document.getElementById('et-mig-data');
   if (migrationData) {
      var guide = JSON.parse(migrationData.textContent);
      var paintMigration = function (month) {
         var current = guide.months[month];
         document.getElementById('et-mig-title').textContent = guide.names[month] + ' · ' + current.title;
         document.getElementById('et-mig-place').textContent = current.place;
         document.getElementById('et-mig-text').textContent = current.text;
         document.querySelectorAll('.et-mig-stop, .et-mig-herd').forEach(function (node) {
            node.classList.toggle('is-on', node.getAttribute('data-month') === String(month));
         });
         var animals = document.getElementById('et-mig-animals');
         if (animals) {
            animals.replaceChildren();
            (current.animals || []).forEach(function (name) {
               var item = document.createElement('li');
               item.textContent = name;
               animals.appendChild(item);
            });
         }
         document.querySelectorAll('.et-mig-months a').forEach(function (link) {
            link.classList.toggle('is-active', link.getAttribute('data-month') === String(month));
         });
         var text = 'Hello Enjoyable Tour. I am interested in the wildebeest migration in ' + guide.names[month] + ' (' + current.place + '). Please suggest a safari.';
         var link = document.getElementById('et-mig-wa');
         link.href = 'https://wa.me/' + guide.phone + '?text=' + encodeURIComponent(text);
      };
      var activeMonth = document.querySelector('.et-mig-months a.is-active');
      if (activeMonth) paintMigration(activeMonth.getAttribute('data-month'));
      document.querySelectorAll('.et-mig-months a').forEach(function (link) {
         link.addEventListener('click', function (event) {
            event.preventDefault();
            paintMigration(link.getAttribute('data-month'));
            history.replaceState(null, '', link.href);
         });
      });
   }

   var pack = document.getElementById('et-pack');
   if (pack) {
      var refreshPack = function () {
         var lines = [];
         pack.querySelectorAll('h3').forEach(function (heading) {
            var list = heading.nextElementSibling;
            var items = [];
            if (!list) return;
            list.querySelectorAll('input:checked').forEach(function (box) {
               items.push('- ' + box.parentNode.querySelector('span').textContent);
            });
            if (items.length) lines.push(heading.textContent, items.join('\n'));
         });
         var link = document.getElementById('et-pack-wa');
         var text = 'Hello Enjoyable Tour. Please review my packing list for ' + pack.querySelector('h2').textContent + '.\n\n' + lines.join('\n');
         link.href = link.href.split('?')[0] + '?text=' + encodeURIComponent(text);
      };
      pack.addEventListener('change', refreshPack);
   }

   function clamp(value, min, max) {
      var number = parseInt(value, 10);
      if (isNaN(number)) number = min;
      return Math.min(max, Math.max(min, number));
   }

   function money(amount) {
      return '$' + Math.round(amount).toLocaleString('en-US');
   }
})();
