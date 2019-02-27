
let defaultConfig = require('tailwindcss/defaultConfig')()


let colors = {
    'transparent'   : 'transparent',

    'black'         : '#000000',

    'grey-darker'   : '#212121',
    'grey-dark'     : '#616161',
    'grey'          : '#9E9E9E',
    'grey-light'    : '#E0E0E0',
    'grey-lighter'  : '#F5F5F5',

    'white'         : '#ffffff',

    'orange-darker' : '#CC9B0B',
    'orange-dark'   : '#E5AF0D',
    'orange'        : '#FFC20E',
    'orange-light'  : '#FFD559',
    'orange-lighter': '#FFE599',

    'blue-darker'   : '#00416B',
    'blue-dark'     : '#00538A',
    'blue'          : '#0072BC',
    'blue-light'    : '#0088E0',
    'blue-lighter'  : '#12A2FF',

    'purple-darker' : '#4C1324',
    'purple-dark'   : '#6E1B34',
    'purple'        : '#912445',
    'purple-light'  : '#B52D56',
    'purple-lighter': '#D13464',

    'red-darker'    : '#B71C1C',
    'red-dark'      : '#D32F2F',
    'red'           : '#F44336',
    'red-light'     : '#E57373',
    'red-lighter'   : '#FFCDD2',

    'yellow-darker' : '#F57F17',
    'yellow-dark'   : '#FBC02D',
    'yellow'        : '#FFEB3B',
    'yellow-light'  : '#FFF176',
    'yellow-lighter': '#FFF9C4',

    'green-darker'  : '#1B5E20',
    'green-dark'    : '#388E3C',
    'green'         : '#4CAF50',
    'green-light'   : '#81C784',
    'green-lighter' : '#C8E6C9',

}

module.exports = {

    colors: colors,


    screens: {
        'sm': '768px',
        'md': '1300px',
        'lg': '1920px',
      },



    fonts: {
        'sans': [
            'CeraPRO',
            'Roboto',
            'Helvetica Neue',
            'sans-serif',
        ],
        // 'serif': [
        //     'Constantia',
        //     'Liberation Serif',
        //     'Georgia',
        //     'serif',
        // ],
    },


    textSizes: {
        '12' : '.75rem',
        '14' : '.875rem',
        '16' : '1rem',
        '18' : '1.125rem',
        '24' : '1.5rem',
        '30' : '1.875rem',
        '36' : '2.25rem',
        '48' : '3rem',
        '72' : '4.5rem',
        '96' : '6rem',
        '144': '9rem',
    },


    fontWeights: {
        // 'hairline' : 100,
        // 'thin'     : 200,
        // 'light'    : 300,
        'regular'  : 400,
        // 'medium'   : 500,
        // 'semibold' : 600,
        'bold'     : 700,
        // 'extrabold': 800,
        // 'black'    : 900,
    },


    leading: {
        'none': 1,
        'tight': 1.25,
        'normal': 1.5,
        'loose': 2,
    },


    tracking: {
        'tight': '-0.05em',
        'normal': '0',
        'wide': '0.05em',
    },


    textColors: colors,


    backgroundColors: colors,


    backgroundSize: {
        'auto': 'auto',
        'cover': 'cover',
        'contain': 'contain',
    },


    borderWidths: {
        default: '1px',
        '0': '0',
        '2': '2px',
        '4': '4px',
        '8': '8px',
    },


    borderColors: global.Object.assign({ default: colors['grey-light'] }, colors),


    borderRadius: {
        'none': '0',
        'sm': '.125rem',
        default: '.25rem',
        'lg': '.5rem',
        'full': '9999px',
    },


    width: {
        'auto'  : 'auto',
        'px'    : '1px',
        '0'     : '0',
        '4'     : '0.25rem',
        '8'     : '0.5rem',
        '16'    : '1rem',
        '24'    : '1.5rem',
        '32'    : '2rem',
        '40'    : '2.5rem',
        '48'    : '3rem',
        '64'    : '4rem',
        '72'    : '4.5rem',
        '80'    : '5rem',
        '96'    : '6rem',
        '120'   : '7.5rem',
        '168'   : '10.5rem',
        '192'   : '12rem',
        '240'   : '15rem',
        '360'   : '22.5rem',
        '480'   : '30rem',
        '600'   : '37.5rem',
        '720'   : '45rem',
        '840'   : '52.5rem',
        '960'   : '60rem',
        '1/2'   : '50%',
        '1/3'   : '33.33333%',
        '2/3'   : '66.66667%',
        '1/4'   : '25%',
        '3/4'   : '75%',
        '1/5'   : '20%',
        '2/5'   : '40%',
        '3/5'   : '60%',
        '4/5'   : '80%',
        '1/6'   : '16.66667%',
        '5/6'   : '83.33333%',
        'full'  : '100%',
        'screen': '100vw',
    },


    height: {
        'auto'  : 'auto',
        'px'    : '1px',
        '0'     : '0',
        '4'     : '0.25rem',
        '8'     : '0.5rem',
        '16'    : '1rem',
        '24'    : '1.5rem',
        '32'    : '2rem',
        '40'    : '2.5rem',
        '48'    : '3rem',
        '64'    : '4rem',
        '72'    : '4.5rem',
        '80'    : '5rem',
        '96'    : '6rem',
        '120'   : '7.5rem',
        '168'   : '10.5rem',
        '192'   : '12rem',
        '240'   : '15rem',
        '360'   : '22.5rem',
        '480'   : '30rem',
        '600'   : '37.5rem',
        '720'   : '45rem',
        '840'   : '52.5rem',
        '960'   : '60rem',
        'full'  : '100%',
        'screen': '100vh',
    },


    minWidth: {
        '0'     : '0',
        '4'     : '0.25rem',
        '8'     : '0.5rem',
        '16'    : '1rem',
        '24'    : '1.5rem',
        '32'    : '2rem',
        '40'    : '2.5rem',
        '48'    : '3rem',
        '64'    : '4rem',
        '72'    : '4.5rem',
        '80'    : '5rem',
        '96'    : '6rem',
        '120'   : '7.5rem',
        '168'   : '10.5rem',
        '192'   : '12rem',
        '240'   : '15rem',
        '360'   : '22.5rem',
        '480'   : '30rem',
        '600'   : '37.5rem',
        '720'   : '45rem',
        '840'   : '52.5rem',
        '960'   : '60rem',
        'full'  : '100%',
    },


    minHeight: {
        '0'     : '0',
        '4'     : '0.25rem',
        '8'     : '0.5rem',
        '16'    : '1rem',
        '24'    : '1.5rem',
        '32'    : '2rem',
        '40'    : '2.5rem',
        '48'    : '3rem',
        '64'    : '4rem',
        '72'    : '4.5rem',
        '80'    : '5rem',
        '96'    : '6rem',
        '120'   : '7.5rem',
        '168'   : '10.5rem',
        '192'   : '12rem',
        '240'   : '15rem',
        '360'   : '22.5rem',
        '480'   : '30rem',
        '600'   : '37.5rem',
        '720'   : '45rem',
        '840'   : '52.5rem',
        '960'   : '60rem',
        'full'  : '100%',
        'screen': '100vh',
    },


    maxWidth: {
        '0'     : '0',
        '4'     : '0.25rem',
        '8'     : '0.5rem',
        '16'    : '1rem',
        '24'    : '1.5rem',
        '32'    : '2rem',
        '40'    : '2.5rem',
        '48'    : '3rem',
        '64'    : '4rem',
        '72'    : '4.5rem',
        '80'    : '5rem',
        '96'    : '6rem',
        '120'   : '7.5rem',
        '168'   : '10.5rem',
        '192'   : '12rem',
        '240'   : '15rem',
        '360'   : '22.5rem',
        '480'   : '30rem',
        '600'   : '37.5rem',
        '720'   : '45rem',
        '840'   : '52.5rem',
        '960'   : '60rem',
        'full'  : '100%',
    },


    maxHeight: {
        '0'     : '0',
        '4'     : '0.25rem',
        '8'     : '0.5rem',
        '16'    : '1rem',
        '24'    : '1.5rem',
        '32'    : '2rem',
        '40'    : '2.5rem',
        '48'    : '3rem',
        '64'    : '4rem',
        '72'    : '4.5rem',
        '80'    : '5rem',
        '96'    : '6rem',
        '120'   : '7.5rem',
        '168'   : '10.5rem',
        '192'   : '12rem',
        '240'   : '15rem',
        '360'   : '22.5rem',
        '480'   : '30rem',
        '600'   : '37.5rem',
        '720'   : '45rem',
        '840'   : '52.5rem',
        '960'   : '60rem',
        'full'  : '100%',
        'screen': '100vh',
    },


    padding: {
        'px'    : '1px',
        '0'     : '0',
        '4'     : '0.25rem',
        '8'     : '0.5rem',
        '16'    : '1rem',
        '24'    : '1.5rem',
        '32'    : '2rem',
        '40'    : '2.5rem',
        '48'    : '3rem',
        '64'    : '4rem',
        '72'    : '4.5rem',
        '80'    : '5rem',
        '96'    : '6rem',
        '120'   : '7.5rem',
        '168'   : '10.5rem',
        '192'   : '12rem',
        '240'   : '15rem',
        '360'   : '22.5rem',
        '480'   : '30rem',
        '600'   : '37.5rem',
        '720'   : '45rem',
        '840'   : '52.5rem',
        '960'   : '60rem',
    },


    margin: {
        'auto'  : 'auto',
        'px'    : '1px',
        '0'     : '0',
        '4'     : '0.25rem',
        '8'     : '0.5rem',
        '16'    : '1rem',
        '24'    : '1.5rem',
        '32'    : '2rem',
        '40'    : '2.5rem',
        '48'    : '3rem',
        '64'    : '4rem',
        '72'    : '4.5rem',
        '80'    : '5rem',
        '96'    : '6rem',
        '120'   : '7.5rem',
        '168'   : '10.5rem',
        '192'   : '12rem',
        '240'   : '15rem',
        '360'   : '22.5rem',
        '480'   : '30rem',
        '600'   : '37.5rem',
        '720'   : '45rem',
        '840'   : '52.5rem',
        '960'   : '60rem',
    },

    negativeMargin: {
        'px'    : '1px',
        '0'     : '0',
        '4'     : '0.25rem',
        '8'     : '0.5rem',
        '16'    : '1rem',
        '24'    : '1.5rem',
        '32'    : '2rem',
        '40'    : '2.5rem',
        '48'    : '3rem',
        '64'    : '4rem',
        '72'    : '4.5rem',
        '80'    : '5rem',
        '96'    : '6rem',
        '120'   : '7.5rem',
        '168'   : '10.5rem',
        '192'   : '12rem',
        '240'   : '15rem',
        '360'   : '22.5rem',
        '480'   : '30rem',
        '600'   : '37.5rem',
        '720'   : '45rem',
        '840'   : '52.5rem',
        '960'   : '60rem',
    },


    shadows: {
        '1'   : '0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24)',
        '2'   : '0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23)',
        '3'   : '0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23)',
        '4'   : '0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22)',
        '5'   : '0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22)',
        'none': 'none',
    },


    zIndex: {
        'auto': 'auto',
        '0': 0,
        '10': 10,
        '20': 20,
        '30': 30,
        '40': 40,
        '50': 50,
    },


    opacity: {
        '0': '0',
        '25': '.25',
        '50': '.5',
        '75': '.75',
        '100': '1',
    },


    svgFill: {
        'current': 'currentColor',
    },


    svgStroke: {
        'current': 'currentColor',
    },


    modules: {
        appearance: ['responsive'],
        backgroundAttachment: ['responsive'],
        backgroundColors: ['responsive', 'hover', 'focus'],
        backgroundPosition: ['responsive'],
        backgroundRepeat: ['responsive'],
        backgroundSize: ['responsive'],
        borderCollapse: [],
        borderColors: ['hover', 'focus'],
        borderRadius: ['responsive'],
        borderStyle: ['responsive'],
        borderWidths: ['responsive'],
        cursor: [],
        display: ['responsive'],
        flexbox: ['responsive'],
        float: ['responsive'],
        fonts: ['responsive'],
        fontWeights: ['responsive'],
        height: ['responsive'],
        leading: ['responsive'],
        lists: ['responsive'],
        margin: ['responsive'],
        maxHeight: ['responsive'],
        maxWidth: ['responsive'],
        minHeight: ['responsive'],
        minWidth: ['responsive'],
        negativeMargin: ['responsive'],
        objectFit: false,
        objectPosition: false,
        opacity: ['responsive', 'hover', 'focus'],
        outline: ['focus'],
        overflow: ['responsive'],
        padding: ['responsive'],
        pointerEvents: ['responsive'],
        position: ['responsive'],
        resize: ['responsive'],
        shadows: ['responsive', 'hover', 'focus'],
        svgFill: [],
        svgStroke: [],
        tableLayout: ['responsive'],
        textAlign: ['responsive'],
        textColors: ['responsive', 'hover', 'focus'],
        textSizes: ['responsive'],
        textStyle: ['responsive'],
        tracking: ['responsive'],
        userSelect: ['responsive'],
        verticalAlign: ['responsive'],
        visibility: ['responsive'],
        whitespace: ['responsive'],
        width: ['responsive'],
        zIndex: ['responsive'],
    },


    plugins: [
        require('tailwindcss/plugins/container')({
        }),
    ],


    options: {
        prefix: '',
        important: false,
        separator: ':',
    },

}
