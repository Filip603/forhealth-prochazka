var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("navbar").style.top = "0";
        } else {
            document.getElementById("navbar").style.top = "-90px";
        }
        prevScrollpos = currentScrollPos;
        }
if (window.innerWidth <= 1000) {
    var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("navbar").style.top = "0";
        } else {
            document.getElementById("navbar").style.top = "-300px";
        }
        prevScrollpos = currentScrollPos;
        }
}



function pridatDoKosiku(nazev, cena, obrazek) {
    let kosik = JSON.parse(localStorage.getItem('kosik')) || [];

    kosik.push({ nazev, cena, obrazek });

    localStorage.setItem('kosik', JSON.stringify(kosik));

    alert(`${Položka} byla přidán do košíku.`);
}





const container = document.getElementById('kosik-container');
let kosik = JSON.parse(localStorage.getItem('kosik')) || [];

function zobrazKosik() {
    container.innerHTML = '';

    if (kosik.length === 0) {
        container.innerHTML = '<p>Košík je prázdný.</p>';
        return;
    }

    kosik.forEach((polozka, index) => {
        const div = document.createElement('div');
        div.style.display = "flex";
        div.style.alignItems = "center";
        div.style.gap = "20px";


        let imgStyle = "width:100px; height:auto; border-radius:15px;";

        if (polozka.nazev === "Vitamín D3") {
            imgStyle = "width:66px; height:120px; object-fit:cover; margin:17px";
        }

        div.innerHTML = `
            <img src="${polozka.obrazek}" style="${imgStyle}">
            <div>
                <h3>${polozka.nazev}</h3>
                <p>Cena: ${polozka.cena} Kč</p>
            </div>
            <button style="height:40px; padding:5px 10px; cursor:pointer; border-radius:10px; background-color:#ff4d4d; color:white; border:none;">Odstranit</button>
        `;

        div.querySelector('button').addEventListener('click', () => {
            kosik.splice(index, 1);
            localStorage.setItem('kosik', JSON.stringify(kosik));
            zobrazKosik();
        });

        container.appendChild(div);
    });
}


zobrazKosik();