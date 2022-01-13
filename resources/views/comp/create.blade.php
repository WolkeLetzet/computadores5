<form action="">


    <div>
        <label for="oficina"></label>}
        <select name="oficina" id="oficina">

            @for ($i = 0; $i < 5; $i++)
                <option value=""{{$i}}></option>
            @endfor
            

        </select>
    </div>
    <div>
        <label for="encargado">Encargado</label>
        <input name="encargado" type="text">
    </div> 

    <div>
        <label for="tipoUso"></label>}
        <select name="tipoUso" id="marca">

            @for ($i = 0; $i < 5; $i++)
                <option value=""{{$i}}></option>
            @endfor
            

        </select>
    </div>
    
    <div>
        <label for="marca"></label>}
        <select name="marca" id="marca">

            @for ($i = 0; $i < 5; $i++)
                <option value=""{{$i}}></option>
            @endfor
            

        </select>
    </div>

</form>