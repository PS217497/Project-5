import * as React from 'react';
import { useState } from 'react';
import { StyleSheet, Text, Button, View, StatusBar } from 'react-native';
import './i18n/i18n';
import {setBeschrijving } from "./Auto";
import {useTranslation} from 'react-i18next';
  

function home({navigation}) {
      
  const {t, i18n} = useTranslation();
  
  const [currentLanguage,setLanguage] =useState('en');
  
  const changeLanguage = value => {
    setBeschrijving(value);
    i18n
      .changeLanguage(value)
      .then(() => setLanguage(value))
      .catch(err => console.log(err));
  };

    
    return(
        <View style={{flex: 1, alignItems: 'center', justifyContent: 'center'}}>
            <Text
                onPress={() => navigation.navigate('Home')}
                style={{fontSize: 26, fontWeight: 'bold'}}>  {t('homehead')}{' '}
            </Text>
            <Button title="English" onPress={() => changeLanguage('en')} /> 
           <Button title="Nederlands" onPress={() => changeLanguage('nl')} /> 
          
            <StatusBar style="auto" />
        </View>
    );
}


  export default home;