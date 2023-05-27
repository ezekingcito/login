/*Al dar clic en cualquier boton que sea de numeros, 
se ejecuta esta funcion y se agrega el value del boton presionado*/
function agregar(valor) {
    document.getElementById('display').value += valor;
}

/*Esta funcion solo borra todos los valores y resultados guardados y la inicia desde cero*/
function borrar() {
    document.getElementById('display').value = '';
}

//Esta funcion es del boton =, con la funcion eval obtenemos el resultado de la operacion ingresada
function calcular() {
    let resultado = eval(document.getElementById('display').value);
    document.getElementById('display').value = resultado;
}

//Elimina el ultimo valor, solo se ejecuta al dar clic en "<-"
function eliminarUltimo() {
    let display = document.getElementById('display');
    let valor = display.value;
    if (valor.length > 0) {
        valor = valor.substring(0, valor.length - 1);
        display.value = valor;
    }
}