var geocoder = new maptiler.Geocoder({
    input: 'search', // id of input element
    key: 'suCwN2aq2PIqkCa3HQNV'
});
geocoder.on('select', function(item) {
    console.log('Selected', item);
    console.log(item);
    var ttext = '';
    var name_full = '';
    var country_name = '';
    for (a = 0; a < item.context.length; a++) {
        ttext += '<b>' + item.context[a].text + '</b>, ';
        name_full += item.context[a].text + ',';
        var context_id_str = item.context[a].id;
        if (context_id_str.indexOf('country') !== -1) {
            var country_name = item.context[a].text;
        }
    }
    console.log(country_name, ttext, name_full);
});
