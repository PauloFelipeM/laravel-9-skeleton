import _ from 'lodash';

window._ = _;

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';

window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

 import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

window.Pusher = Pusher;


window.Echo = new Echo({
    broadcaster: 'pusher',
    key: 'qwerty',
    cluster: 'mt1',
    forceTLS: false,
    wsHost: '127.0.0.1',
    wsPort: 6001,
});

// const pusher = new Pusher('49f7a8afe1e6f2328a83', {
//     cluster: 'mt1'
// });
//
// const channel = pusher.subscribe('events');
//
// channel.bind('RealTimeMessage', function(data) {
//     console.log(data);
// });
