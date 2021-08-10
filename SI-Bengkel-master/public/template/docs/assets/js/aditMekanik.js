
// PARTS AUTO FIELD

document.addEventListener("DOMContentLoaded", function () {
    // const part = document.querySelectorAll('.form-control');
    const part = document.querySelectorAll('.tampil');


    part.forEach((a) => {
        a.addEventListener('click', function (e) {
            // console.log('okkk');
            // e.preventDefault();
            const modalFooter = document.querySelector('.modal-footer button[type=submit]');
            modalFooter.innerHTML = 'Update Data';
            document.querySelector('.modal-body form').setAttribute('action', 'http://localhost:8080/master/editMekanik');

            // console.log(curut);
            // const id = parseInt(a.attributes['data-bs-id'].value);
            // const id = e.target.value;
            console.log(a);

            const id = a.attributes['data-bs-id'].value;
            console.log(id);
            // const data = { id: id };
            (async () => {
                const result = await fetch('http://localhost:8080/master/getUbah', {
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
                document.querySelector('#mekanikId').value = jueson.id_mekanik;
                document.querySelector('#nameMekanik').value = jueson.name_mekanik;
                document.querySelector('#divisi').value = jueson.divisi;

                // const hr_part = document.querySelectorAll('.perPcs');
                // hr_part.forEach((hr_child) => {
                //     // console.log(hr_child);
                //     hr_child.value = jueson.hr_part;
                // })
            })();

        });

    });


});
