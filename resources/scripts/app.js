import Alpine from 'alpinejs'
window.Alpine = Alpine
Alpine.store('app', {
    dark: false,
    open: true,
    toggleSidebar(){
        this.open = ! this.open;
    },
    toggleDark() {
        this.dark = ! this.dark;
    },
});
// Alpine.data('dropdown', dropdown)

Alpine.start()

