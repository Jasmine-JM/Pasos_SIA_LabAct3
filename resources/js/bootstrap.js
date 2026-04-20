/**
 * Bootstrap Laravel Echo / Axios (default Breeze file)
 */

import axios from 'axios';

window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';