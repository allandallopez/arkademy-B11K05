    function biodata(){
    var  myBiodata = {
        name : 'Allan Jonna Iffaldy Alkautsar ',
        age : 18,
        address : 'Perum Cipatat Elok Blok B 20 Kec. Cipatat Kab. Bandung Barat Prov. Jawa Barat, 40754.',
        hobbies:['Travelling','Gaming','Coding'],
        is_married : false,
        list_school : [
            {name: 'SMKN 4 Padalarang', year_in: 2016, year_out: 2019, major: 'RPL'}
        ],
        skills : [
            { name: 'html', level: 'advanced' },
            { name: 'css', level: 'advanced' },
            { name: 'php', level:'advanced' },
            { name: 'javascript', level: 'beginner' },
            { name: 'java', level: 'advanced' },
            { name: 'c++', level: 'advanced' }
        ],
        interest_in_coding : true 
    }

    return myBiodata;
}

console.log(biodata());