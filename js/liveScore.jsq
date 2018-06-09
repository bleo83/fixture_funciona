function refrezcarCalculos() {
    alert("se ejecutó onload");
    recalculando('a');
    recalculando('b');
    recalculando('c');
    recalculando('d');
    recalculando('e');
    recalculando('f');
    recalculando('g');
    recalculando('h');
    clasificando(document.getElementById("ocgl1l"));
    clasificando(document.getElementById("ocgl2l"));
    clasificando(document.getElementById("ocgl3l"));
    clasificando(document.getElementById("ocgl4l"));
    clasificando(document.getElementById("ocgl5l"));
    clasificando(document.getElementById("ocgl6l"));
    clasificando(document.getElementById("ocgl7l"));
    clasificando(document.getElementById("ocgl8l"));
    clasificando(document.getElementById("cugl1l"));
    clasificando(document.getElementById("cugl2l"));
    clasificando(document.getElementById("cugl3l"));
    clasificando(document.getElementById("cugl4l"));
    clasificando(document.getElementById("sfgl1l"));
    clasificando(document.getElementById("sfgl2l"));
    inicializada = true;

}

function recalculando(grupo) {

    //var grupo = "partidos";
    //recibo por parametro la letra del grupo

    equipo1 = new Equipo(document.getElementById("pais" + grupo + "1l").innerHTML);
    equipo2 = new Equipo(document.getElementById("pais" + grupo + "1v").innerHTML);
    equipo3 = new Equipo(document.getElementById("pais" + grupo + "2l").innerHTML);
    equipo4 = new Equipo(document.getElementById("pais" + grupo + "2v").innerHTML);

    for (i = 1; i < 7; i++) {
        if (document.getElementById("gol" + grupo + i + "l").value != "" && document.getElementById("gol" + grupo + i + "v").value != "") {
            equipoLocal = new Equipo(document.getElementById("pais" + grupo + i + "l").innerHTML);
            equipoVisitante = new Equipo(document.getElementById("pais" + grupo + i + "v").innerHTML);
            golLocal = parseInt(document.getElementById("gol" + grupo + i + "l").value);
            golVisitante = parseInt(document.getElementById("gol" + grupo + i + "v").value);
            cargarResultado(equipo1, equipo2, equipo3, equipo4, equipoLocal, golLocal, golVisitante);
            cargarResultado(equipo1, equipo2, equipo3, equipo4, equipoVisitante, golVisitante, golLocal);
        }
    }
    equiposORD = ordenarEquipos(equipo1, equipo2, equipo3, equipo4);
    for (h = 0; h < 4; h++) {
        printEquipoEnTabla(grupo, "puesto" + (h + 1), equiposORD[h]);
    }

}

function Equipo(pais) {
    this.pais = pais;
    ptos = 0;
    pj = 0;
    g = 0;
    p = 0;
    e = 0;
    difGol = 0;
    gf = 0;
    gc = 0;
    ordenado = false;
}
inicializada = true;
Equipo.prototype.pais = "Nombre Pais";
Equipo.prototype.ptos = 0;
Equipo.prototype.pj = 0;
Equipo.prototype.g = 0;
Equipo.prototype.p = 0;
Equipo.prototype.e = 0;
Equipo.prototype.difGol = 0;
Equipo.prototype.gf = 0;
Equipo.prototype.gc = 0;
Equipo.prototype.ordenado = false;
Equipo.prototype.cargarPartido = function(paisM, gf, gc) {
    if (this.pais == paisM.pais) {
        this.pj = this.pj + 1;
        this.gf = this.gf + gf;
        this.gc = this.gc + gc;
        this.difGol = this.difGol + gf - gc;
        if (gf == gc) {
            this.e = this.e + 1;
            this.ptos = this.ptos + 1;
        } else {
            if (gf > gc) {
                this.g = this.g + 1;
                this.ptos = this.ptos + 3;
            } else {
                this.p = this.p + 1;
            }
        }
    }

};
Equipo.prototype.esMejorQue = function(otroEquipo) {
    if (this.ptos > otroEquipo.ptos) {
        return true;
    } else {
        if (this.ptos == otroEquipo.ptos) {
            if (this.difGol > otroEquipo.difGol) {
                return true;
            } else {
                if (this.difGol == otroEquipo.difGol) {
                    if (this.gf > otroEquipo.gf) {
                        return false;
                    } else {
                        return false;
                    }

                } else {
                    return false;
                }


            }
        } else {
            return false;
        }
    }

};

function ordenarEquipos(equipo1, equipo2, equipo3, equipo4) {
    var equipos = [equipo1, equipo2, equipo3, equipo4];
    for (i = 0; i < 4; i++) {
        for (j = 0; j < 3; j++) {
            if (equipos[j].esMejorQue(equipos[j + 1]) !== true) {
                aux = equipos[j];
                equipos[j] = equipos[j + 1];
                equipos[j + 1] = aux;
            }
        }

    }

    return equipos;

}
function cargarResultado(equipo1, equipo2, equipo3, equipo4, pais, gf, gc) {
    var cargado = false;
    equipo1.cargarPartido(pais, gf, gc);
    equipo2.cargarPartido(pais, gf, gc);
    equipo3.cargarPartido(pais, gf, gc);
    equipo4.cargarPartido(pais, gf, gc);

}

function printEquipoEnTabla(grupo, elementoFila, equipo) {
    document.getElementById(elementoFila + grupo + "pais").innerHTML = equipo.pais;
    document.getElementById(elementoFila + grupo + "ptos").innerHTML = equipo.ptos;
    document.getElementById(elementoFila + grupo + "pj").innerHTML = equipo.pj;
    document.getElementById(elementoFila + grupo + "pg").innerHTML = equipo.g;
    document.getElementById(elementoFila + grupo + "pe").innerHTML = equipo.e;
    document.getElementById(elementoFila + grupo + "pp").innerHTML = equipo.p;
    document.getElementById(elementoFila + grupo + "gf").innerHTML = equipo.gf;
    document.getElementById(elementoFila + grupo + "ge").innerHTML = equipo.gc;
    document.getElementById(elementoFila + grupo + "df").innerHTML = equipo.difGol;

    if (equipo.pj == 3 && (elementoFila.substr(6, 1) == "1" || elementoFila.substr(6, 2))) {
        if (elementoFila.substr(6, 1) == "1") {
            //crear tag imagen para bandera wikipediar
            document.getElementById("pais1" + grupo).innerHTML = equipo.pais;
            document.getElementById("bandera1" + grupo).src = getBandera(equipo.pais);
        }

        if (elementoFila.substr(6, 1) == "2") {
            //crear tag imagen para bandera wikipediar
            document.getElementById("pais2" + grupo).innerHTML = equipo.pais;
            document.getElementById("bandera2" + grupo).src = getBandera(equipo.pais);
        }
    }
}
function nextFase(fase, ganador) {
    switch (fase) {
        case "oc":
            return "cu";
            break;
        case "cu":
            return "sf";
            break;
        case "sf":
            if (ganador == true) {
                return "fi";
            } else {
                return "tc";
            }
            break;
        case "fi":
            return null;
            break;
        case "tc":
            return null;
            break;
    }
}

function getNextLocalOVis(partido) {
    if (parseInt(partido) % 2 == 0) {
        return "v";
    } else {
        return "l";
    }
}

function getNroPartidoCuartos(partidoOctavos) {
    switch (partidoOctavos) {
        case "1":
            return "1";
        case "2":
            return "1";
        case "3":
            return "3";
        case "4":
            return "3";
        case "5":
            return "2";
        case "6":
            return "2";
        case "7":
            return "4";
        case "8":
            return "4";
    }
}
function getNroPartidoSemis(partidoCuartos) {
    switch (partidoCuartos) {
        case "1":
            return "1";
        case "2":
            return "1";
        case "3":
            return "2";
        case "4":
            return "2";

    }
}

function getClasGrupo(cod) {
    switch (cod) {
        case "1l":
            return "1a";
            break;
        case "1v":
            return "2b";
            break;
        case "2l":
            return "1c";
            break;
        case "2v":
            return "2d";
            break;
        case "3l":
            return "1b";
            break;
        case "3v":
            return "2a";
            break;
        case "4l":
            return "1d";
            break;
        case "4v":
            return "2c";
            break;
        case "5l":
            return "1e";
            break;
        case "5v":
            return "2f";
            break;
        case "6l":
            return "1g";
            break;
        case "6v":
            return "2h";
            break;
        case "7l":
            return "1f";
            break;
        case "7v":
            return "2e";
            break;
        case "8l":
            return "1h";
            break;
        case "8v":
            return "2g";
            break;

    }
}

function getBandera(pais) {
    switch (pais) {
        case "Brasil":
            return "banderas/Brasil.png";
            break;
        case "Croacia":
            return "banderas/Croacia.png";
            break;
        case "Mexico":
            return "banderas/Mexico.png";
            break;
        case "Camerun":
            return "banderas/Camerun.png";
            break;
        case "Espana":
            return "banderas/Espana.png";
            break;
        case "Holanda":
            return "banderas/Holanda.png";
            break;
        case "Chile":
            return "banderas/Chile.png";
            break;
        case "Australia":
            return "banderas/Australia.png";
            break;
        case "Colombia":
            return "banderas/Colombia.png";
            break;
        case "Grecia":
            return "banderas/Grecia.png";
            break;
        case "C. de Marfil":
            return "banderas/C. de marfil.png";
            break;
        case "Japon":
            return "banderas/Japon.png";
            break;
        case "Uruguay":
            return "banderas/Uruguay.png";
            break;
        case "Costa Rica":
            return "banderas/Costa Rica.png";
            break;
        case "Inglaterra":
            return "banderas/Inglaterra.png";
            break;
        case "Italia":
            return "banderas/Italia.png";
            break;
        case "Suiza":
            return "banderas/Suiza.png";
            break;
        case "Ecuador":
            return "banderas/Ecuador.png";
            break;
        case "Francia":
            return "banderas/Francia.png";
            break;
        case "Honduras":
            return "banderas/Honduras.png";
            break;
        case "Argentina":
            return "banderas/Argentina.png";
            break;
        case "Bosnia":
            return "banderas/Bosnia.png";
            break;
        case "Iran":
            return "banderas/Iran.png";
            break;
        case "Nigeria":
            return "banderas/Nigeria.png";
            break;
        case "Alemania":
            return "banderas/Alemania.png";
            break;
        case "Portugal":
            return "banderas/Portugal.png";
            break;
        case "Ghana":
            return "banderas/Ghana.png";
            break;
        case "EEUU":
            return "banderas/usa.png";
            break;
        case "Belgica":
            return "banderas/Belgica.png";
            break;
        case "Argelia":
            return "banderas/Argelia.png";
            break;
        case "Rusia":
            return "banderas/Rusia.png";
            break;
        case "Corea del Sur":
            return "banderas/Corea del sur.png";
            break;
    }
}

function getIdProxPartido(elemento, ganador, partido, fase) {
    if (fase == "oc") {
        return nextFase(fase, ganador) + elemento + getNroPartidoCuartos(partido) + getNextLocalOVis(partido);
    }
    if (fase == "cu") {
        return nextFase(fase, ganador) + elemento + getNroPartidoSemis(partido) + getNextLocalOVis(partido);
    }
    if (fase == "sf") {
        if (ganador == true) {
            return nextFase(fase, ganador) + elemento + "1" + getNextLocalOVis(partido);
        } else {
            return nextFase(fase, perdedor) + elemento + "1" + getNextLocalOVis(partido);
        }
    }
}
function clasificando(disparador) {
    //disparador id ocgl1l

    fase = disparador.id.substr(0, 2);
    tipoGol = disparador.id.substr(2, 2);
    partido = disparador.id.substr(4, 1);
    lado = disparador.id.substr(5, 1);
    local = "";
    visita = "";
    if (fase == "oc") {
        local = document.getElementById("pais" + getClasGrupo(partido + "l")).innerHTML;
        visita = document.getElementById("pais" + getClasGrupo(partido + "v")).innerHTML;
    } else {
        local = document.getElementById(fase + "pais" + partido + "l").innerHTML;
        visita = document.getElementById(fase + "pais" + partido + "v").innerHTML;
    }

    golL = document.getElementById(fase + "gl" + partido + "l").value;
    golV = document.getElementById(fase + "gl" + partido + "v").value;
    penL = document.getElementById(fase + "gp" + partido + "l").value;
    penV = document.getElementById(fase + "gp" + partido + "v").value;

    ganador = "";
    perdedor = "";
    if (golL != "" && golV != "" && golL == golV) {
        document.getElementById(fase + "gp" + partido + "l").style.display = "block";
        document.getElementById(fase + "gp" + partido + "v").style.display = "block";
    } else {
        document.getElementById(fase + "gp" + partido + "l").value = "";
        document.getElementById(fase + "gp" + partido + "v").value = "";
        document.getElementById(fase + "gp" + partido + "l").style.display = "none";
        document.getElementById(fase + "gp" + partido + "v").style.display = "none";
    }
    if ((golL != "" && golV != "" && golL != golV) || (golL != "" && golV != "" && penL != "" && penV != "" && golL == golV && penL != penV)) {

        if (parseInt(golL) > parseInt(golV)) {
            ganador = local;
            perdedor = visita;
        }
        if (parseInt(golL) < parseInt(golV)) {
            ganador = visita;
            perdedor = local;
        }

        if (parseInt(golL) == parseInt(golV)) {
            if (penL > penV) {
                ganador = local;
                perdedor = visita;
            } else {
                ganador = visita;
                perdedor = local;
            }

        }
        //alert(getIdProxPartido("pais",true,partido,fase));
        clasificar(partido, fase, ganador, perdedor);

    } else {
        clasificar(partido, fase, null, null)
    }

}

function getProximoRival(id) {
    if (id.substr(id.length - 1, 1) == "v") {
        return id.substr(0, id.length - 1) + "l";
    } else {
        return id.substr(0, id.length - 1) + "v";
    }

}
function clasificar(partido, fase, nombreEquipoG, nombreEquipoP) {
    if (fase != "fi" && fase != "tc") {
        equipoOrig = document.getElementById(getIdProxPartido("pais", true, partido, fase)).innerHTML;
        //si la clasificacion es distinta a la que estaba
        if (equipoOrig != nombreEquipoG) {
            //si los datos están completos
            if (nombreEquipoG != null) {
                //cargo el equipo en la siguiente ronda
                document.getElementById(getIdProxPartido("pais", true, partido, fase)).innerHTML = nombreEquipoG;
                document.getElementById(getIdProxPartido("bandera", true, partido, fase)).src = getBandera(nombreEquipoG);
                if (fase == "sf") {
                    document.getElementById(getIdProxPartido("pais", false, partido, fase)).innerHTML = nombreEquipoP;
                    document.getElementById(getIdProxPartido("bandera", false, partido, fase)).src = getBandera(nombreEquipoP);
                }
            } else {
                //cargo el equipo por default

                document.getElementById(getIdProxPartido("pais", true, partido, fase)).innerHTML = "No calculado";
                document.getElementById(getIdProxPartido("bandera", true, partido, fase)).src = "/banderas/black.png";
                if (fase == "sf") {
                    document.getElementById(getIdProxPartido("pais", false, partido, fase)).innerHTML = "No calculado";
                    document.getElementById(getIdProxPartido("bandera", false, partido, fase)).src = "/banderas/black.png";
                }
            }
            if (inicializada == true) {
                //inicializo los datos de la siguiente ronda de este equipo
                document.getElementById(getIdProxPartido("gl", true, partido, fase)).value = "";
                document.getElementById(getIdProxPartido("gp", true, partido, fase)).value = "";
                //inicializo los datos de la siguiente ronda del rival
                document.getElementById(getProximoRival(getIdProxPartido("gl", true, partido, fase))).value = "";
                document.getElementById(getProximoRival(getIdProxPartido("gp", true, partido, fase))).value = "";
                clasificando(document.getElementById(getIdProxPartido("gl", true, partido, fase)));

                //si es sf tambien inicializo partido por tercer puesto
                if (fase == "sf") {
                    //inicializo los datos de la siguiente ronda de este equipo
                    document.getElementById(getIdProxPartido("gl", false, partido, fase)).value = "";
                    document.getElementById(getIdProxPartido("gp", false, partido, fase)).value = "";
                    //inicializo los datos de la siguiente ronda del rival
                    document.getElementById(getProximoRival(getIdProxPartido("gl", false, partido, fase))).value = "";
                    document.getElementById(getProximoRival(getIdProxPartido("gp", false, partido, fase))).value = "";
                    clasificando(document.getElementById(getIdProxPartido("gl", false, partido, fase)));
                }
            }

        }
    }
}


