<div class="create-listing-container flex">
    <div class="create-form">
        <form method="POST" action="" class="create-listing-form grid">
            @csrf
            <div class="create-listing-inputs flex dir-col">
                <div class="input-container">
                    <div class="input-field flex">
                        <label for="vehicle">Choose vehicle</label>
                        <select name="vehicle" class="input">
                            <option value="" selected disabled hidden>Choose here</option>
                        </select>
                    </div>
                    <p class="info-tip">*Choose vehicle to track data for.</p>
                    @error('vehicle')
                    <p class="">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input-container">
                    <div class="input-field flex">
                        <label for="price-per-liter">Price per liter</label>
                        <input type="text" class="input" name="price-per-liter" value="{{old('price-per-liter')}}">
                    </div>
                    <p class="info-tip">*Type the fuel price per liter when you filled up.</p>
                    <p class="info-tip">*Check current fuel prices <a href="https://cijenegoriva.hr/" target="_blank" aria-label="Page showing current fuel prices for different gas stations in Croatia">here</a></p>
                    @error('price-per-liter')
                    <p class="">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input-container">
                    <div class="input-field flex">
                        <label for="liters-filled">Liters filled</label>
                        <input type="text" name="liters-filled" class="input" value="{{old ('liters-filled') }}">
                    </div>
                    <p class="info-tip">*How many liters have you put in the tank?</p>
                    @error('liters-filled')
                    <p class="">{{ $message }}</p>
                    @enderror
                </div>
                <!-- <div class="input-container">
                    <div class="input-field flex">
                        <label for="amount-paid">Amount paid</label>
                        <input type="text" name="amount-paid" class="input" value="{{old ('amount-paid') }}">
                    </div>
                    <p class="info-tip">*How much did you pay?</p>
                    @error('amount-paid')
                    <p class="">{{ $message }}</p>
                    @enderror
                </div> -->
                <div class="input-container">
                    <div class="input-field flex">
                        <label for="distance-traveled">Distance traveled</label>
                        <input type="text" name="distance-traveled" class="input" value="{{old('distance-traveled')}}">
                    </div>
                    <p class="info-tip">*How much did you travel since last fillup?</p>
                    @error('distance-traveled')
                    <p class="">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input-container flex dir-col">
                    <div class="input-field flex">
                        <label for="date">Date</label>
                        <input type="date" name="date" class="input" id="date" value="">
                    </div>
                    @error('date')
                    <p class="">{{ $message }}</p>
                    @enderror
                    <div class="date-checkbox">
                        <input type="checkbox" name="use-current-date">
                        <label for="use-current-date">Use todays date</label>
                    </div>
                    <p class="info-tip">*Date of the fillup.</p>
                </div>
                <div id="gas-station-input" class="input-container flex dir-col">
                    <div class="input-field flex">
                        <label for="gas-station" id="gas-station-label"></label>
                        <input type="text" name="gas-station" class="input">
                    </div>
                    <div class="input-field flex">
                        <label for="gas-station-options">Gas station</label>
                        <select class="input">
                            <option value="" selected disabled hidden>Choose here</option>
                            <option value="gas_station-options">Ina</option>
                            <option value="gas_station-options">Tifon</option>
                            <option value="gas_station-options">Petrol</option>
                            <option value="gas_station-options">Adria oil</option>
                            <option value="gas_station-options">Coral Croatia</option>
                            <option value="gas_station-options">Lukoil</option>
                        </select>
                    </div>
                    <p class="info-tip">*Write or select name of a gas station.</p>
                    @error('gas-station')
                    <p class="">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <input class="create-btn" type="submit" value="Create">
        </form>
    </div>
</div>