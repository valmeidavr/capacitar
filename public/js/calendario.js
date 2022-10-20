let calendar = document.querySelector('.calendar')

const month_names = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro']
isLeapYear = (year) => {
    return (year % 4 === 0 && year % 100 !== 0 && year % 400 !== 0) || (year % 100 === 0 && year % 400 === 0)
}

getFebDays = (year) => {
    return isLeapYear(year) ? 29 : 28
}

generateCalendar = (month, year) => {

    let calendar_days = calendar.querySelector('.calendar-days')
    let calendar_header_year = calendar.querySelector('#year')
    // Pegando o ultimo dia do mês
    let days_of_month = [31, getFebDays(year), 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]

    calendar_days.innerHTML = ''

    let currDate = new Date()
    //if (!month) month = currDate.getMonth()
    if (!year) year = currDate.getFullYear()

    let curr_month = `${month_names[month]}`
    month_picker.innerHTML = curr_month
    calendar_header_year.innerHTML = year

    // pegar o primeiro dia do mês

    let first_day = new Date(year, month, 1)
    for (let i = 0; i <= days_of_month[month] + first_day.getDay() - 1; i++) {
        let day = document.createElement('div')
        let day2 = 0
        if (i >= first_day.getDay()) {
            day.classList.add('calendar-day-hover')

            day2 = i - first_day.getDay() + 1
            day.id = day2
            day.innerHTML = day2

            if (i - first_day.getDay() + 1 === currDate.getDate() && year === currDate.getFullYear() && month === currDate.getMonth()) {
                day.classList.add('curr-date')
            }


        }
        //mostrando no console ao clicar na div
        day.addEventListener("click", function () {
            mes = parseInt(month) + parseInt(1)
            let DateSelect = document.getElementById("data")
            if (day.id != "") {
                if(day.id.length == 1){
                    document.getElementById('data').value = 0+day.id + "-" + mes + "-" + year
                }else{
                document.getElementById('data').value = day.id + "-" + mes + "-" + year
                //DateSelect.textContent = day.id + " / " + mes + " / " + year
                }
            }
        });
        calendar_days.appendChild(day)
    }
    //let DateSelect = document.getElementById("data")
    document.getElementById('data').value =currDate.getDate() + "-" + (currDate.getMonth() + 1) + "-" + currDate.getFullYear()
   // DateSelect.textContent = currDate.getDate() + " / " + (currDate.getMonth() + 1) + " / " + currDate.getFullYear()
}   

let month_list = calendar.querySelector('.month-list')

month_names.forEach((e, index) => {
    let month = document.createElement('div')
    month.innerHTML = `<div data-month="${index}">${e}</div>`
    month.querySelector('div').onclick = () => {
        month_list.classList.remove('show')
        curr_month.value = index
        generateCalendar(index, curr_year.value)
    }
    month_list.appendChild(month)
})

let month_picker = calendar.querySelector('#month-picker')

month_picker.onclick = () => {
    month_list.classList.add('show')
}

let currDate = new Date()

let curr_month = { value: currDate.getMonth() }
let curr_year = { value: currDate.getFullYear() }

generateCalendar(curr_month.value, curr_year.value)

document.querySelector('#prev-year').onclick = () => {
    --curr_year.value
    generateCalendar(curr_month.value, curr_year.value)
}

document.querySelector('#next-year').onclick = () => {
    ++curr_year.value
    generateCalendar(curr_month.value, curr_year.value)
}

