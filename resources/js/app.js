import './bootstrap';

Echo.channel('events')
    .listen('RealTimeMessage', (e) => console.log('RealTimeMessage: ' + e.message));
