
// PARTS AUTO FIELD

document.addEventListener("DOMContentLoaded", function () {
    // const part = document.querySelectorAll('.form-control');
    const tampilEditPart = document.querySelectorAll('.tampilEditPart');


    tampilEditPart.forEach((a) => {
        a.addEventListener('click', function (e) {
            // console.log('okkk');
            // e.preventDefault();
            const modalTitle = document.querySelector('.modal-title');
            modalTitle.innerHTML = 'Edit Data Part';

            const modalFooter = document.querySelector('.modal-footer button[type=submit]');
            modalFooter.innerHTML = 'Update Data';
            document.querySelector('.modal-body form').setAttribute('action', 'http://localhost:8080/master/editPart');

            console.log(a);

            const id = a.attributes['data-bs-id'].value;
            (async () => {
                const result = await fetch('http://localhost:8080/master/getUbahPart', {
                    method: 'POST', // or 'PUT'
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({ id: id, toJSON() { return this.id; } })
                });

                const content = await result.text();
                // console.log(content);
                let jueson = JSON.parse(content);
                console.log(jueson);
                document.querySelector('#kd_part').value = jueson.kd_part;
                document.querySelector('#name_part').value = jueson.name_part;
                document.querySelector('#hr_part').value = jueson.hr_part;
                document.querySelector('#t_part').value = jueson.t_part;
            })();

        });

    });


});
