@extends('main')
@section('title', '| Feedback')
@section('link', 'Feedback')
@section('content')
<div class="col-md-8 section group" style="text-align:justify">
    <form action="" method="post">
        <br><h5>Kindly fill out this form to improve our service</h5>
        <ol>
            <li>How likely is it that you would recommend this website to a friend or colleague<br>
                <table id='table_1' class='table table-striped table-hover' cellspacing='0' width='100%'>
                    <thead class='primary' style="background-color:black; color:white;">
                        <tr>
                            @for($i=0;$i<=10;$i+=2)
                                <th style="text-align:center;"><label style='font-size: 20px'><input type='radio' name='question1' value={{$i}}>{{$i}}</th></label>                                                  
                            @endfor
                        </tr>
                    </thead>
                </table>
            </li><br>
            <li>Overall, how would you rate this website<br>
                <label style="font-size: 14px"><input type="radio" value="10" name="question2">&nbsp;&nbsp;Excellent</label><br>
                <label style="font-size: 14px"><input type="radio" value="8" name="question2">&nbsp;&nbsp;Very good</label><br>
                <label style="font-size: 14px"><input type="radio" value="6" name="question2">&nbsp;&nbsp;Good</label><br>
                <label style="font-size: 14px"><input type="radio" value="4" name="question2">&nbsp;&nbsp;Fair</label><br>
                <label style="font-size: 14px"><input type="radio" value="2" name="question2">&nbsp;&nbsp;Poor</label><br>
            </li><br>
            <li>How organized is this website<br>
                <label style="font-size: 14px"><input type="radio" value="10" name="question3">&nbsp;&nbsp;Extremely organized</label><br>
                <label style="font-size: 14px"><input type="radio" value="8" name="question3">&nbsp;&nbsp;Very organized</label><br>
                <label style="font-size: 14px"><input type="radio" value="6" name="question3">&nbsp;&nbsp;Somewhat organized</label><br>
                <label style="font-size: 14px"><input type="radio" value="4" name="question3">&nbsp;&nbsp;Not so organized</label><br>
                <label style="font-size: 14px"><input type="radio" value="2" name="question3">&nbsp;&nbsp;Not at all organized</label><br>
            </li><br>
            <li>How helpful is this website<br>
                <label style="font-size: 14px"><input type="radio" value="10" name="question4">&nbsp;&nbsp;Extremely helpful</label><br>
                <label style="font-size: 14px"><input type="radio" value="8" name="question4">&nbsp;&nbsp;Very helpful</label><br>
                <label style="font-size: 14px"><input type="radio" value="6" name="question4">&nbsp;&nbsp;Somewhat helpful</label><br>
                <label style="font-size: 14px"><input type="radio" value="4" name="question4">&nbsp;&nbsp;Not so helpful</label><br>
                <label style="font-size: 14px"><input type="radio" value="2" name="question4">&nbsp;&nbsp;Not at all helpful</label><br>
            </li><br>
            <li>Is there anything else you will like to share for the improvement of this website<br>
                <textarea name="question5" cols="70" class="form-control" rows="5"></textarea>
            </li>
        </ol>
        <!--<input type="submit" name="logout" value="Logout">-->
        <input type="submit" name="feedback" class="btn btn-primary" value="Submit & Logout"><br><br>
    </form>
</div>
@stop
