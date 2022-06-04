<form method='get' action='calculator'>
    <h3>Simple Calculator </h3>
<input type='number' name='num1'><br><br>
<input type='number' name='num2'><BR><br>
 <button type="submit" name="action" value="sum"style='margin:5px'>sum</button>
<button type="submit" name="action" value="substract"style='margin:5px'>substract</button>
<button type="submit" name="action" value="multiply" style='margin:5px'>multiply</button>
<button type="submit" name="action" value="division" style='margin:5px'>division</button>
@if(isset($result))
the answer is {{$result}}
@endif

</form >