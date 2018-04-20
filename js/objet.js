var Element = {
    init: function(name, urlimage, value){
        this.name = name;
        this.urlImage = urlImage;
        this.value = value;
    }
}

//Objet Pièce 1

var hautParleur = Object.create(Element);
apple.init('hautParleur, ../cartes/hautparleur.svg, 25');

var Telephone = Object.create(Element);
apple.init('Telephone, ../cartes/telephonecasse.svg, 44');

var Ascenseur = Object.create(Element);
apple.init('Ascenseur, ../cartes/ascenseurless.svg, 72');

var Disjoncteur = Object.create(Element);
apple.init('Disjoncteur, ../cartes/disjoncteur.svg, 43');

var Hache = Object.create(Element);
apple.init('Hache, ../cartes/Hache.svg, 12');

//Objet Pièce 2

var peauOurs = Object.create(Element);
apple.init('peauOurs, ../cartes/peauOurs.svg, 68');

var Trappe = Object.create(Element);
apple.init('Trappe, ../cartes/Trappe.svg, 35');

var Lampe = Object.create(Element);
apple.init('Lampe, ../cartes/lampe.svg, 17');

var Alumette = Object.create(Element);
apple.init('Alumette, ../cartes/allu.svg, 7');

var CartePostal = Object.create(Element);
apple.init('CartePostal, ../cartes/cathéb.svg, 61');


