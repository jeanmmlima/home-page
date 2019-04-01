function validator(id_grupo, id_horario, id_data) {
  var x, text;

  // Get the value of the input field with id="numb"
  grupo = document.getElementById(id_grupo).value;
  horario = document.getElementById(id_horario).value;
  data = document.getElementById(id_data).value;

  // If x is Not a Number or less than one or greater than 10
  if (grupo == 0) {
    text = "Grupo: Campo obrigatório!"
    document.getElementById("l_grupo").innerHTML = text;
  } 

  if (horario == 0){
    text = "Horário: Campo obrigatório!"
    document.getElementById("l_horario").innerHTML = text;
  }

  if (!isNaN(data.valueOf())){
    text = "Data: Campo obrigatório!"
    document.getElementById("l_data").innerHTML = text;
  }


}