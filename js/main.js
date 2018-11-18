let script = new function () {

    let el = document.getElementById('countries');
    let countries = ['USA', 'Canada', 'Australia', 'Ukraine', 'Poland', 'France', 'England', 'Brazil'];
    let form = document.getElementById('addCountry');

    this.showAll = function () {
        let data = '';
        if (countries.length > 0) {
            for (let i in countries) {
                data += `<tr><td> ${countries[i]} </td><td>
                    <a onclick= script.Delete(${i})>Delete</a></td></tr>`;
            }
        }
        return el.innerHTML = data;
    };

    this.Delete = function (item) {
        countries.splice(item, 1);
        this.showAll();
    };

    form.addEventListener('submit', function () {
        let el = document.getElementById('countryName');
        let country = el.value;
        if (country) {
            if (countries.includes(country)) {
                alert('This country already exists in the list of countries!');
            }
            else {
                countries.push(country);
                el.value = '';
                script.showAll();
            }
        }
    });

};
script.showAll();