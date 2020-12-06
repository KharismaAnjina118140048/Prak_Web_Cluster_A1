var i = 4;
function Tambah() {
    var nama = document.getElementById("new").value;
    var ul = document.getElementById("ul");
    var mNewList = document.createElement("li");
    mNewList.setAttribute("id", i);
    mAddNew(mNewList, nama);
    ul.append(mNewList);
    i++;
}

function Hapus(id) {
    document.getElementById(id).remove();
}

function Edit(id) {
    var nama = prompt("Masukkan nama baru: ", document.getElementById(id).innerText.split(" | ")[0]);
    if (nama != null) {
        var li = document.getElementById(id);
        li.innerHTML = "";
        mAddNew(li, nama, id);
    }
}

function AddNew(li, nama, id) {
    li.append(nama + " | ");
    li.append(mEdit(id));
    li.append(" | ");
    li.append(mHapus(id));
}

function Edit(id = i) {
    var edit = document.createElement("a");
    edit.setAttribute("onclick", "edit(" + id + ")");
    edit.append("Edit");
    return edit;
}

function Hapus(id = i) {
    var edit = document.createElement("a");
    edit.setAttribute("onclick", "hapus(" + id + ")");
    edit.append("Hapus");
    return edit;
}