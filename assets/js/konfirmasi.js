function hapusMenu(url) {
    Swal.fire({
        title: 'Are you sure?',
            text: "Yakin ingin hapus menu",
            icon: 'warning',
            showCancelButtom: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ya, hapus!'
    }).then((result) => {
        if(result.value) {
            document.location.href = url;
        }
    })
    
}

function hapusRole(url) {
    Swal.fire({
        title: 'Are you sure?',
            text: "Yakin ingin hapus role",
            icon: 'warning',
            showCancelButtom: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ya, hapus!'
    }).then((result) => {
        if(result.value) {
            document.location.href = url;
        }
    })
    
}

function hapusSubmenu(url) {
    Swal.fire({
        title: 'Are you sure?',
            text: "Yakin ingin hapus sub menu",
            icon: 'warning',
            showCancelButtom: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ya, hapus!'
    }).then((result) => {
        if(result.value) {
            document.location.href = url;
        }
    })
    
}