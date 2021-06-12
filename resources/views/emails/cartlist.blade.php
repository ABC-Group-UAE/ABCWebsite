<br>

Product Enquiry
<br>
Customer detail is
<br>

** Email:** {{ $contact->customer_mailid }}  <br>

** Name:** {{ $contact->CustomerName }}  <br>

** Mobile Number:** {{ $contact->mobile }} <br>



Product Details <br>
@php
$i=0;
@endphp
@foreach($products as $product) 
@php
$i++;
@endphp
{{$i}}. </t>
Product ID : {{ $product->id }} <br>
Product Name: {{ $product->name }}                    <br>
Quantity : {{ $product->quantity }}                          <br>



@endforeach



Please contact this person...

<br>

Thank you <br>

Regards,<br>