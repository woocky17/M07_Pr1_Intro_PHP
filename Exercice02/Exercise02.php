<?php
/*
1. Se declara una variable con un valor numérico. UƟlizando una estructura switch/case
genera un mensaje que indique a qué día de la semana se corresponde.
a. En caso de que no sea un valor entre el 1 y el 7 indica que no se corresponde
con ningún día. 
*/
echo "1. Se declara una variable con un valor numérico. Utilizando una estructura switch/case
genera un mensaje que indique a qué día de la semana se corresponde.<br>
a. En caso de que no sea un valor entre el 1 y el 7 indica que no se corresponde
con ningún día. <br><br>";

$dia = rand(1,10);
echo "Variable: $dia <br> <br>";
echo "Dia de la semana: ";

switch ($dia) {
    case 1:
        echo "Lunes";
        break;
        case 2:
            echo "Martes";
            break;
            case 3:
                echo "Miercoles";
                break;
                case 4:
                    echo "Jueves";
                    break;
                    case 5:
                        echo "Viernes";
                        break;
                        case 6:
                            echo "Sabado";
                            break;
                            case 7:
                                echo "Domingo";
                                break;
    default:
    echo "No coincide con ningun dia";
    break;
}