let monday_content = document.getElementById('monday_content')
let thuesday_content = document.getElementById('thuesday_content')
let wednesday_content = document.getElementById('wednesday_content')
let thursday_content = document.getElementById('thursday_content')
let friday_content = document.getElementById('friday_content')
let saturday_content = document.getElementById('saturday_content')
let sunday_content = document.getElementById('sunday_content')

let mondayActivateButton = document.getElementById('mondayActivateButton')
let mondayDisactivateButton = document.getElementById('mondayDisactivateButton')
let thuesdayActivateButton = document.getElementById('thuesdayActivateButton')
let thuesdayDisactivateButton = document.getElementById('thuesdayDisactivateButton')
let wednesdayActivateButton = document.getElementById('wednesdayActivateButton')
let wednesdayDisactivateButton = document.getElementById('wednesdayDisactivateButton')
let thursdayActivateButton = document.getElementById('thursdayActivateButton')
let thursdayDisactivateButton = document.getElementById('thursdayDisactivateButton')
let fridayActivateButton = document.getElementById('fridayActivateButton')
let fridayDisactivateButton = document.getElementById('fridayDisactivateButton')
let saturdayActivateButton = document.getElementById('saturdayActivateButton')
let saturdayDisactivateButton = document.getElementById('saturdayDisactivateButton')
let sundayActivateButton = document.getElementById('sundayActivateButton')
let sundayDisactivateButton = document.getElementById('sundayDisactivateButton')

let monday_confirmed = document.getElementById('monday_confirmed')
let thuesday_confirmed = document.getElementById('thuesday_confirmed')
let wednesday_confirmed = document.getElementById('wednesday_confirmed')
let thursday_confirmed = document.getElementById('thursday_confirmed')
let friday_confirmed = document.getElementById('friday_confirmed')
let saturday_confirmed = document.getElementById('saturday_confirmed')
let sunday_confirmed = document.getElementById('sunday_confirmed')

let mondayDate = document.getElementById('mondayDate')
let thuesdayDate = document.getElementById('thuesdayDate')
let wednesdayDate = document.getElementById('wednesdayDate')
let thursdayDate = document.getElementById('thursdayDate')
let fridayDate = document.getElementById('fridayDate')
let saturdayDate = document.getElementById('saturdayDate')
let sundayDate = document.getElementById('sundayDate')

function activateWeekDayFunc(week_day){
    switch(week_day){
        case 'monday':
            if(monday_content.classList.contains('opacity_content')){
                monday_content.classList.remove('opacity_content')
            }
            if(mondayDisactivateButton.classList.contains('d-none')){
                mondayDisactivateButton.classList.remove('d-none')
            }
            if(!mondayActivateButton.classList.contains('d-none')){
                mondayActivateButton.classList.add('d-none')
            }
            if(mondayDate.disabled){
                mondayDate.disabled = false
            }
            monday_confirmed.value = 1
            break;
        case 'thuesday':
            if(thuesday_content.classList.contains('opacity_content')){
                thuesday_content.classList.remove('opacity_content')
            }
            if(thuesdayDisactivateButton.classList.contains('d-none')){
                thuesdayDisactivateButton.classList.remove('d-none')
            }
            if(!thuesdayActivateButton.classList.contains('d-none')){
                thuesdayActivateButton.classList.add('d-none')
            }
            if(thuesdayDate.disabled){
                thuesdayDate.disabled = false
            }
            thuesday_confirmed.value = 1
            break;
        case 'wednesday':
            if(wednesday_content.classList.contains('opacity_content')){
                wednesday_content.classList.remove('opacity_content')
            }
            if(wednesdayDisactivateButton.classList.contains('d-none')){
                wednesdayDisactivateButton.classList.remove('d-none')
            }
            if(!wednesdayActivateButton.classList.contains('d-none')){
                wednesdayActivateButton.classList.add('d-none')
            }
            if(wednesdayDate.disabled){
                wednesdayDate.disabled = false
            }
            wednesday_confirmed.value = 1
            break;
        case 'thursday':
            if(thursday_content.classList.contains('opacity_content')){
                thursday_content.classList.remove('opacity_content')
            }
            if(thursdayDisactivateButton.classList.contains('d-none')){
                thursdayDisactivateButton.classList.remove('d-none')
            }
            if(!thursdayActivateButton.classList.contains('d-none')){
                thursdayActivateButton.classList.add('d-none')
            }
            if(thursdayDate.disabled){
                thursdayDate.disabled = false
            }
            thursday_confirmed.value = 1
            break;
        case 'friday':
            if(friday_content.classList.contains('opacity_content')){
                friday_content.classList.remove('opacity_content')
            }
            if(fridayDisactivateButton.classList.contains('d-none')){
                fridayDisactivateButton.classList.remove('d-none')
            }
            if(!fridayActivateButton.classList.contains('d-none')){
                fridayActivateButton.classList.add('d-none')
            }
            if(fridayDate.disabled){
                fridayDate.disabled = false
            }
            friday_confirmed.value = 1
            break;
        case 'saturday':
            if(saturday_content.classList.contains('opacity_content')){
                saturday_content.classList.remove('opacity_content')
            }
            if(saturdayDisactivateButton.classList.contains('d-none')){
                saturdayDisactivateButton.classList.remove('d-none')
            }
            if(!saturdayActivateButton.classList.contains('d-none')){
                saturdayActivateButton.classList.add('d-none')
            }
            if(saturdayDate.disabled){
                saturdayDate.disabled = false
            }
            saturday_confirmed.value = 1
            break;
        case 'sunday':
            if(sunday_content.classList.contains('opacity_content')){
                sunday_content.classList.remove('opacity_content')
            }
            if(sundayDisactivateButton.classList.contains('d-none')){
                sundayDisactivateButton.classList.remove('d-none')
            }
            if(!sundayActivateButton.classList.contains('d-none')){
                sundayActivateButton.classList.add('d-none')
            }
            if(sundayDate.disabled){
                sundayDate.disabled = false
            }
            sunday_confirmed.value = 1
            break;
    }
}
function disactivateWeekDayFunc(week_day){
    switch(week_day){
        case 'monday':
            if(!monday_content.classList.contains('opacity_content')){
                monday_content.classList.add('opacity_content')
            }
            if(mondayActivateButton.classList.contains('d-none')){
                mondayActivateButton.classList.remove('d-none')
            }
            if(!mondayDisactivateButton.classList.contains('d-none')){
                mondayDisactivateButton.classList.add('d-none')
            }
            if(mondayDate.disabled == false){
                mondayDate.disabled = true
            }
            monday_confirmed.value = 0
            break;
        case 'thuesday':
            if(!thuesday_content.classList.contains('opacity_content')){
                thuesday_content.classList.add('opacity_content')
            }
            if(thuesdayActivateButton.classList.contains('d-none')){
                thuesdayActivateButton.classList.remove('d-none')
            }
            if(!thuesdayDisactivateButton.classList.contains('d-none')){
                thuesdayDisactivateButton.classList.add('d-none')
            }
            if(thuesdayDate.disabled == false){
                thuesdayDate.disabled = true
            }
            thuesday_confirmed.value = 0
            break;
        case 'wednesday':
            if(!wednesday_content.classList.contains('opacity_content')){
                wednesday_content.classList.add('opacity_content')
            }
            if(wednesdayActivateButton.classList.contains('d-none')){
                wednesdayActivateButton.classList.remove('d-none')
            }
            if(!wednesdayDisactivateButton.classList.contains('d-none')){
                wednesdayDisactivateButton.classList.add('d-none')
            }
            if(wednesdayDate.disabled == false){
                wednesdayDate.disabled = true
            }
            wednesday_confirmed.value = 0
            break;
        case 'thursday':
            if(!thursday_content.classList.contains('opacity_content')){
                thursday_content.classList.add('opacity_content')
            }
            if(thursdayActivateButton.classList.contains('d-none')){
                thursdayActivateButton.classList.remove('d-none')
            }
            if(!thursdayDisactivateButton.classList.contains('d-none')){
                thursdayDisactivateButton.classList.add('d-none')
            }
            if(thursdayDate.disabled == false){
                thursdayDate.disabled = true
            }
            thursday_confirmed.value = 0
            break;
        case 'friday':
            if(!friday_content.classList.contains('opacity_content')){
                friday_content.classList.add('opacity_content')
            }
            if(fridayActivateButton.classList.contains('d-none')){
                fridayActivateButton.classList.remove('d-none')
            }
            if(!fridayDisactivateButton.classList.contains('d-none')){
                fridayDisactivateButton.classList.add('d-none')
            }
            if(fridayDate.disabled == false){
                fridayDate.disabled = true
            }
            friday_confirmed.value = 0
            break;
        case 'saturday':
            if(!saturday_content.classList.contains('opacity_content')){
                saturday_content.classList.add('opacity_content')
            }
            if(saturdayActivateButton.classList.contains('d-none')){
                saturdayActivateButton.classList.remove('d-none')
            }
            if(!saturdayDisactivateButton.classList.contains('d-none')){
                saturdayDisactivateButton.classList.add('d-none')
            }
            if(saturdayDate.disabled == false){
                saturdayDate.disabled = true
            }
            saturday_confirmed.value = 0
            break;
        case 'sunday':
            if(!sunday_content.classList.contains('opacity_content')){
                sunday_content.classList.add('opacity_content')
            }
            if(sundayActivateButton.classList.contains('d-none')){
                sundayActivateButton.classList.remove('d-none')
            }
            if(!sundayDisactivateButton.classList.contains('d-none')){
                sundayDisactivateButton.classList.add('d-none')
            }
            if(sundayDate.disabled == false){
                sundayDate.disabled = true
            }
            sunday_confirmed.value = 0
            break;
    }
}
function disableAllWeeklySchedules(){
    if(!monday_content.classList.contains('opacity_content')){
        monday_content.classList.add('opacity_content')
    }
    if(mondayActivateButton.classList.contains('d-none')){
        mondayActivateButton.classList.remove('d-none')
    }
    if(!mondayDisactivateButton.classList.contains('d-none')){
        mondayDisactivateButton.classList.add('d-none')
    }
    if(mondayDate.disabled == false){
        mondayDate.disabled = true
    }
    monday_confirmed.value = 0
    if(!thuesday_content.classList.contains('opacity_content')){
        thuesday_content.classList.add('opacity_content')
    }
    if(thuesdayActivateButton.classList.contains('d-none')){
        thuesdayActivateButton.classList.remove('d-none')
    }
    if(!thuesdayDisactivateButton.classList.contains('d-none')){
        thuesdayDisactivateButton.classList.add('d-none')
    }
    if(thuesdayDate.disabled == false){
        thuesdayDate.disabled = true
    }
    thuesday_confirmed.value = 0
    if(!wednesday_content.classList.contains('opacity_content')){
        wednesday_content.classList.add('opacity_content')
    }
    if(wednesdayActivateButton.classList.contains('d-none')){
        wednesdayActivateButton.classList.remove('d-none')
    }
    if(!wednesdayDisactivateButton.classList.contains('d-none')){
        wednesdayDisactivateButton.classList.add('d-none')
    }
    if(wednesdayDate.disabled == false){
        wednesdayDate.disabled = true
    }
    wednesday_confirmed.value = 0
    if(!thursday_content.classList.contains('opacity_content')){
        thursday_content.classList.add('opacity_content')
    }
    if(thursdayActivateButton.classList.contains('d-none')){
        thursdayActivateButton.classList.remove('d-none')
    }
    if(!thursdayDisactivateButton.classList.contains('d-none')){
        thursdayDisactivateButton.classList.add('d-none')
    }
    if(thursdayDate.disabled == false){
        thursdayDate.disabled = true
    }
    thursday_confirmed.value = 0
    if(!friday_content.classList.contains('opacity_content')){
        friday_content.classList.add('opacity_content')
    }
    if(fridayActivateButton.classList.contains('d-none')){
        fridayActivateButton.classList.remove('d-none')
    }
    if(!fridayDisactivateButton.classList.contains('d-none')){
        fridayDisactivateButton.classList.add('d-none')
    }
    if(fridayDate.disabled == false){
        fridayDate.disabled = true
    }
    friday_confirmed.value = 0
    if(!saturday_content.classList.contains('opacity_content')){
        saturday_content.classList.add('opacity_content')
    }
    if(saturdayActivateButton.classList.contains('d-none')){
        saturdayActivateButton.classList.remove('d-none')
    }
    if(!saturdayDisactivateButton.classList.contains('d-none')){
        saturdayDisactivateButton.classList.add('d-none')
    }
    if(saturdayDate.disabled == false){
        saturdayDate.disabled = true
    }
    saturday_confirmed.value = 0
    if(!sunday_content.classList.contains('opacity_content')){
        sunday_content.classList.add('opacity_content')
    }
    if(sundayActivateButton.classList.contains('d-none')){
        sundayActivateButton.classList.remove('d-none')
    }
    if(!sundayDisactivateButton.classList.contains('d-none')){
        sundayDisactivateButton.classList.add('d-none')
    }
    if(sundayDate.disabled == false){
        sundayDate.disabled = true
    }
    sunday_confirmed.value = 0
}
