<form action="">


    <div>
        <label for="oficina"></label>}
        <select name="oficina" id="">

            @for ($i = 0; $i < 5; $i++)
                <option value=""{{$i}}></option>
            @endfor
            

        </select>
    </div>
    <div>
        <label for="encargado">Encargado</label>
        <input name="encargado" type="text">
    </div> 
    

</form>