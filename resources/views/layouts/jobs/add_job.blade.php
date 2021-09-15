
<!DOCTYPE html>
@if( auth()->check() )
<form method="POST"  action="add">
    @csrf
    
     <p>
        <label>Date/Time
        <input type="datetime-local" name="time" required>
        </label>
    </p>
    
    <p>
        <label>Agent Name: (email)
        <input type="text" name="agent_email" value="{{Auth::user()->email}}" required>
        </label>

        <label> Agent ID : 
            <input type="text" name="agent_id" value="{{Auth::user()->id}}" required>
        </label>
    </p> 


    <fieldset>
        <legend>CSP?</legend>
        <p><label> <input type="radio" name="csp" required value="Connectology"> Connectology </label></p>
        <p><label> <input type="radio" name="csp" required value="Talkine"> Talkine </label></p>
      
    </fieldset>

    
    
    <p>
    <label>Phone : 
    <input type="tel" name="phone_number">
    </label>
    <label>Alternate Phone 
   <input type="tel" name="alternate_phone_number">
    </label>
    </p>

    
    <p>
    <label>Email 
    <input type="email" name="email_address">
    </label>
    </p>
    
    <p>
        <label>Name
        <input type="text" name="customer_first_name" placeholder="First Name " required>
        <input type="text" name="customer_last_name" placeholder="Last Name " required>
        </label> 
        </p>
    
    <fieldset>
    <legend>Address</legend>
    <p><label> Street Address : <input type="text" name="street_address" >  </label></p>
    <p><label> City : <input type="text" name="city" >  </label></p>
    <p><label> State :  <input type="text" name="state" >  </label></p>
    <p><label> Zip Code :  <input id="zip" name="zip" type="text" pattern="[0-9]*">  </label></p>
    
    </fieldset>
    
    
        
    <p>
    <label>Service Provider
    <select id="service_provider" name="service_provider">
        
        @foreach ($services as $service)
        <option value="{{ $service['name'] }}">{{ $service['name'] }}</option>>
        @endforeach
    </select>
    </label> 
    </p>
    
    
    <p>
    <label>Account Number: 
    <input type="text" name="account_number" >
    </label>
    </p>

        <p>
        <label>Account Information: 
        <textarea type="comments" name="account_info"> </textarea>
        </label>
        </p>
    
   

         <p>
        <label>Original Bill
        <input type ="text" name="original_bill" > USD 
        </label>
        </p>

        <p>
        <label>Amount to be Charged
        <input type ="text" name="amount_to_charged" > USD 
        </label>
        </p>
           
        <p>
            <label>Financial Client 
            <select id="financial_client" name="financial_client">
          
                <option value="Dot Net Promotions">Dot Net Promotions</option>>
                <option value="Xfinity - St">Xfinity - St</option>>
               
            </select>
            </label> 
        </p>

        <p>
        <label>Billing Information: 
        <textarea type="comments" name="billing_info"> </textarea>
        </label>
        </p>    
                
        <p>
        <label>CSR comments: 
        <textarea type="comments" name="csr_comments"> </textarea>
        </label>
        </p>           

    <p><button>Submit Booking</button></p>
    
    </form>
    @endif