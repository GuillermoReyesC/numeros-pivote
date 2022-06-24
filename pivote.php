<?php
    
    function pivotes() // devuelve un array con los primeros 10 numeros pivotes
    {
        $pivotes = []; // array vacio
        $numero = 1;  // numero a comprobar
        $sumaAnterior = 0; // suma de los numeros anteriores
        $sumaSiguiente = 0; // suma de los numeros siguientes
        $sucesor = 2; // numero siguiente

        while (count($pivotes) < 10 )   // mientras no haya 10 pivotes
        {
            $sumaAnterior += $numero - 1;   // suma del numero anterior
            $sumaSiguiente -= ($numero == 1 ? 0 : $numero); // resta del numero siguiente
            while ($sumaSiguiente + $sucesor <= $sumaAnterior) //   mientras la suma del sucesor sea menor o igual que la suma del anterior
            {
                $sumaSiguiente += $sucesor; // suma del sucesor
                $sucesor++;    // incrementa el sucesor
            }
            
            if ($sumaAnterior > 0 && $sumaAnterior == $sumaSiguiente) // si la suma del anterior es igual a la suma del siguiente
            {
                $pivotes[] = $numero; // añade el numero al array
            }
            $numero++; // incrementa el numero
        }
        return $pivotes;    // devuelve el array
    }

    function pivotesString() // devuelve un string con los primeros 10 pivotes
    {
        $pivotes = pivotes(); // array con los pivotes
        $pivotesString = implode(',', $pivotes);  // string con los pivotes
        return $pivotesString;  // devuelve el string
    }
    
    function pivotesTable() // devuelve un string con una tabla con los primeros 10 pivotes
{
        $pivotes = pivotes(); // array con los pivotes
        $pivotesTable = '<table border="1">'; // string con la tabla
        $pivotesTable .= '<tr><th>Pivotes</th></tr>'; // encabezado de la tabla
        foreach ($pivotes as $pivote) // recorre el array

        {
            $pivotesTable .= '<tr><td>'.$pivote.'</td></tr>'; // añade el pivote a la tabla
        }
        $pivotesTable .= '</table>'; // cierra la tabla
        return $pivotesTable; // devuelve el string
    }

   // echo pivotesTable(); // muestra la tabla con los pivotes
    
   echo 'los 10 pivotes son: '.pivotesString(); // muestra los pivotes
            

?>