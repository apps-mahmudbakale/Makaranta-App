const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */


mix.styles([
    'public/app-assets/vendors/css/vendors.min.css',
    'public/app-assets/vendors/css/charts/apexcharts.css',
    'public/app-assets/vendors/css/extensions/toastr.min.css',
    'public/app-assets/css/bootstrap.css',
    'public/app-assets/css/bootstrap-extended.css',
    'public/app-assets/css/colors.css',
    'public/app-assets/css/components.css',
    'public/app-assets/css/themes/dark-layout.css',
    'public/app-assets/css/themes/bordered-layout.css',
    'public/app-assets/css/themes/semi-dark-layout.css',
    'public/app-assets/css/core/menu/menu-types/vertical-menu.css',
    'public/app-assets/css/pages/dashboard-ecommerce.css',
    'public/app-assets/css/plugins/charts/chart-apex.css',
    'public/app-assets/css/plugins/extensions/ext-component-toastr.css',
    'public/app-assets/css/plugins/forms/form-validation.css',
    'public/app-assets/css/pages/authentication.css',
    'public/assets/css/style.css',
    'public/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css',
    'public/css/datatables.min.css'
    ], 'public/css/app.css');

 mix.scripts([
      'public/app-assets/vendors/js/vendors.min.js',
      'public/app-assets/vendors/js/charts/apexcharts.min.js',
      'public/app-assets/vendors/js/extensions/toastr.min.js',
      'public/app-assets/js/core/app-menu.js',
      'public/app-assets/js/core/app.js',
      'public/app-assets/js/scripts/pages/dashboard-ecommerce.js',
      'public/app-assets/vendors/js/forms/validation/jquery.validate.min.js',
      'public/app-assets/js/scripts/pages/auth-login.js',
      'public/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js',
      'public/js/datatables.min.js'
   ], 'public/js/app.js');
