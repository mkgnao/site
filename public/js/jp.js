var mkgnaoNs = mkgnaoNs || {};

mkgnaoNs.process = function(key, value, lvl, n) {
    var tdk = document.createElement('td');
    tdk.innerHTML = key.toString().toLowerCase();
    var tdv = document.createElement('td');
    tdv.innerHTML = value.toString().toLowerCase();

    n.appendChild(tdk);
    n.appendChild(tdv);
};

mkgnaoNs.traverse = function(o, func, lvl, n) {
    for (var i in o) {
        if (o[i] == null)
            return;

        var tr = document.createElement('tr');
        func.apply(this, [i, o[i], lvl, tr]);

        if (typeof(o[i]) == "object") {
            mkgnaoNs.traverse(o[i], func, lvl + 1, tr);
        }

        n.appendChild(tr);
    }

    return lvl;
};

mkgnaoNs.getTwTable = function (j) {
    var n = document.createElement('table');
    n.className = "twTable";

    mkgnaoNs.traverse(j, mkgnaoNs.process, 0, n);

    return n;
};