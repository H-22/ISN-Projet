var currentTheme = '';

'night' {

      backgroundColor:'#000000',

      textColor: '#FFFFFF',

    }

'day':  {

      backgroundColor:'#FFFFFF',

      textColor: '#000000',

    }








function setTheme(theme) {

  if (currentTheme === theme) {

    // No point in changing the theme if it has already been set.

    return;

  }

  
  
  
  currentTheme = theme;

  browser.theme.update(themes[theme]);

}




  if {

    setTheme('day');

  } else {

    setTheme('night');

  }
