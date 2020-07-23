Nova.booting((Vue, router, store) => {
    Vue.component('index-laravel-nova-table-field', require('./components/IndexField'));
    Vue.component('detail-laravel-nova-table-field', require('./components/DetailField'));
})
