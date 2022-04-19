var urlParams = function () {
    var param_string = {};
    var query = window.location.search.substring(1);
    var vars = query.split("&");
    for (var i = 0; i < vars.length; i++) {
        var pair = vars[i].split("=");
        // If first entry with this name
        if (typeof param_string[pair[0]] === "undefined") {
            param_string[pair[0]] = decodeURIComponent(pair[1]);
        // If second entry with this name
        } else if (typeof param_string[pair[0]] === "string") {
            var arr = [param_string[pair[0]], decodeURIComponent(pair[1])];
            param_string[pair[0]] = arr;
        // If third or later entry with this name
        } else {
            param_string[pair[0]].push(decodeURIComponent(pair[1]));
        }
    }
    return param_string;
}();
