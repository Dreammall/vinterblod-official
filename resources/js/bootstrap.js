import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// JQueryの読み込み
import $ from 'jquery';
window.$ = window.jQuery = $;

