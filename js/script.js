var tabulka = document.getElementById("tabulka");
var vyskaA = screen.availHeight;
var vyskaC = document.getElementById("vkladanie").getBoundingClientRect().height;
vyska = parseInt(vyskaA) - parseInt(vyskaC) - 150;
tabulka.style.height = vyska + "px";

var table = document.getElementById('tabulka');
var sort = new Tablesort(table);

table.addEventListener('beforeSort', function() {
    alert('Table is about to be sorted!');
});

table.addEventListener('afterSort', function() {
    alert('Table sorted!');
});


