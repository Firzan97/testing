<br><br><B><P>Lets Get Your Insurance Quotation<P></B>

<form action="{{ route('quote.show') }}" method="POST">
    @csrf
<br><br>
     <form action="{{ route('quote.show') }}" method="POST">
    @csrf
  
    <div class="form-group">

Gender:
<select name="gender" >
<option value= Female> Female</option>
<option value= Male> Male</option>
</select>
</div>



    <br><br>
Occupational Class:
<select name="class">
<option value= 1> 1- Engaged in proffesional administrative, managerial, clerical & non-manual occupations</option>
<option value= 2> 2- Engaged in work of supervisory nature but not involved in manual labour </option>
</select>


    <br><br>
Contribution Mode:
<select name="contribution">
<option value= Monthly> Monthly</option>
<option value= Annually> Annually</option>
</select>


    <br><br>
Plan name :
<select name="plan">
<option value= 1> TT201 - TAKAFUL TERM 80 </option>
<option value= 2> TT201P - TAKAFUL TERM 80 Public Sector</option>
</select>

    <br><br>
Age:
<select name="age">
<option value= 20> 20</option>
<option value= 21> 21</option>
<option value= 45> 45</option>
</select>
    <br><br>
Range of your budget:
<select name="budget">
<option value= 50-99> RM50-RM99</option>
<option value= 100-199> RM100-RM199</option>
<option value= 200-299> RM200-RM299</option>
</select>

    <br><br>
Are you smoking?<br>
<input type="checkbox" id="Yes" name="Yes" value="Yes">
<label for="Yes"> Yes</label>
  <input type="checkbox" id="No" name="No" value="No">
  <label for="No"> No</label><br>
<br><br>
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Quote Now</button>
        </div>
    </div>
   
</form>