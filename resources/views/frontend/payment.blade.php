@extends('frontend.includes.master')
@section('body')





        <div class="row clearfix">
            <FORM action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_blank" style="margin-left:20px;">

            <INPUT TYPE="hidden" name="cmd" value="_xclick">
            <input type="hidden" name="business" value="nischal-merchant@yahoo.com">
            <input type="hidden" name="item_name" value="Paypal Payment">
            <input type="hidden" name="no_note" value="1">
            <input type="hidden" name="currency_code" value="USD">
            <input type="hidden" name="landing_page" value="billing">

            <div class="form-group col-md-12">
                <label> Enter Your Amout:</label>
                <input type="text" name="amount" value="" class="form-control" required><br>
                <input type="hidden" name="on0" value="Payment Details">

                <label>Additional Information:</label>
                <textarea name="os0"  class="form-control" required></textarea><br>


            </div>
            {{----}}
            <div class="column col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="form-group">
                    <button type="submit" name="PaypalPayment" value="Send Payment" class="btn btn-success">Proceed To Donate</button><br>
                </div>
            </div>

    </form>

            </div>



    @endsection