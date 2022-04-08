$(function() {
    $('#tabelka').DataTable({
        processing: true,
        serverSide: false,
        language: {
            url: '//cdn.datatables.net/plug-ins/1.11.5/i18n/pl.json'
        }
    });
});