let data = [];
const list= document.getElementById('list-item');
const namaBarang = document.getElementById('nama_barang');

function insertItem() {
    if (namaBarang.value.length > 0) {
        data.push(namaBarang.value);
        renderlist();
    } else {
        console.log("Kosong")
    }

    namaBarang.value = '';
        
}

function editItem(item) {
    const index = data.indexOf(item);
    const newName = prompt('Edit Item');
    if(newName.length > 0) {
        data[index] = newName;
    } else {
        alert('Tidak ada yang diedit');
    }

    renderlist();
}

function deleteItem(item) {
    const index = data.indexOf(item);
    data.splice(index, 1);
    renderlist();
}

function renderlist() {
    let items = '';
    data.forEach(datum => {
        items +=   `<div class='item'>
                        <span>${datum}</span> [
                        <a href="#" onclick="return editItem('${datum}')">Edit</a>
                        |
                        <a href="#" onclick="return deleteItem('${datum}')">Hapus</a>
                        ]
                    </div>`;
    });

    list.innerHTML = items;
}