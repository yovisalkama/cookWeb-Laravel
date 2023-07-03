var buket_pedia = {};
const buket = "storage-buket";



if(buket_pediaFromLocal = localStorage.getItem(buket)){
    buket_pedia = JSON.parse(buket_pediaFromLocal);
    
    for(var key in buket_pedia){
        addList(key, buket_pedia[key]);
    }
}

$(document).ready(function(){
  
  $(".tambah").click(function () {
    tambah();
  });

 
  $("tbody").on("click", ".hapus", function () {
    $(this).parent("tr").remove();
    syncLocalStorage("HAPUS", $(this).prev().prev().text());
  });

  
  $("table").on("click", ".sort-nama", function () {
    sort("tbody", "tr", ".nama");
  });

  
  $("table").on("click", ".sort-rating", function () {
    sort("tbody", "tr", ".rating");
  });

 
  $(".search").on("keyup", function () {
    var value = $(this).val().toLowerCase();
    $(".table-item").filter(function () {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
    });
  });
})

function addList(nama, rating){
    var newBuket = 
    `<tr class='table-item'>
        <td class='nama'>${nama}</td>
        <td class='rating'>${rating}</td>
        <td class='hapus'>HAPUS</td>
    </tr>`;

    $('table').append(newBuket);
}

function syncLocalStorage(activity, nama, rating){
    switch(activity){
        case 'TAMBAH':
            buket_pedia[nama] = rating;
            break;
        case 'HAPUS':
            delete buket_pedia[nama];
            break;
        default:
            break;
    }

    localStorage.setItem(buket, JSON.stringify(buket_pedia));
    return;
}

// fungsi tambah
function tambah(){
    var takjil_nama = $('.takjil-nama').val();
    var takjil_rating = $('.takjil-rating').val();

    addList(takjil_nama, takjil_rating);

    syncLocalStorage('TAMBAH', takjil_nama, takjil_rating);

    $('.takjil-nama').val('');
    $('.takjil-rating').val('');
}

// sort
function sort(parent, child, grandchild){
    $(parent).children(child).sort(function(a, b){
        var A = $(a).children(grandchild).text().toUpperCase();
        var B = $(b).children(grandchild).text().toUpperCase();

        if(grandchild == '.rating'){
            return (A > B) ? -1 : (A > B) ? 1 : 0;
        }else{
            return (A < B) ? -1 : (A > B) ? 1 : 0;
        }
    }).appendTo(parent);
}