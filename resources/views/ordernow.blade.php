@extends('master')
@section("content")
<div class=" custom-product">
  <div class="col-sm-10">
    <table class="table">
        <tbody>
          <tr>
            <td>Amount</td>
            <td>$ {{750}}</td>>
          </tr>
          <tr>
            <td>Tax</td>
            <td>$ 0</td>
          </tr>
          <tr>
            <td>Delivery</td>
            <td>$ 10</td>
          </tr>
          <tr>
            <td>Total Amount</td>
            <td>$ {{750 +10}}</td>
          </tr>
        </tbody>
      </table>
      <div>
        <form action="/orderplace" method="POST">
          @csrf
          <div class="form-group">
            <textarea name="address" placeholder="Enteryour address" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label for="pwd">Payment Method:</label><br><br>
            <input type="radio" value="cash" name="payment"><span>Paypal</span><br><br>
            <input type="radio"  value="cash"name="payment"><span>M PESA</span><br><br>
            <input type="radio" value="cash" name="payment"><span>Payment on Delivery</span><br><br>
          </div>
          <button type="submit" class="btn btn-default">Get Product</button>
        </form>
      </div>
  </div>
</div>
@endsection