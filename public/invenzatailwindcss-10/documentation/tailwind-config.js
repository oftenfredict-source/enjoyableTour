/**
 * Invenza - Tailwind Configuration
 * Configures class-based dark mode and custom theme tokens
 */
window.tailwind = window.tailwind || {};
window.tailwind.config = {
  darkMode: 'class',
  theme: {
    extend: {
      colors: {
        primary: {
          DEFAULT: '#22B573',
          dark: '#15945A',
          light: '#EAF8F1'
        },
        surface: '#FFFFFF',
        background: '#F6F8FA',
        brand: '#17212B',
        muted: '#6B7280'
      },
      fontFamily: {
        sans: ['Inter', 'sans-serif']
      }
    }
  }
};
