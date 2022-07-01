import * as React from 'react';
import { useState } from 'react';
import { StyleSheet, Text, Button, View, StatusBar } from 'react-native';
import './i18n/i18n';
import {useTranslation} from 'react-i18next';

export default function about({navigation}) {
    const {t, i18n} = useTranslation();
    const [currentLanguage,setLanguage] =useState('en');
    const changeLanguage = value => {
    i18n
      .changeLanguage(value)
      .then(() => setLanguage(value))
      .catch(err => console.log(err));
  };
    return(
        <View style={{flex: 1, alignItems: 'center', justifyContent: 'center'}}>
            <Text
                onPress={() => navigation.navigate('About')}
                style={{fontSize: 26, fontWeight: 'bold'}}>{t('headabout1')}{' '}
            </Text>
            <Text
                style={{fontSize: 20, margin: 10 }}>{t('about1')}{' '}
            </Text>


            <Text style={{fontSize: 24, fontWeight: 'bold'}}> {t('headabout2')}{' '} </Text>

            <Text
                style={{fontSize: 20, margin: 10}}>
                    {t('about2')}{' '}
            </Text>

            <Text
                style={{fontSize: 20, margin: 10}}>
                    {t('about3')}{' '}
            </Text>

            <Text
                style={{fontSize: 20, margin: 10}}>
                    {t('about4')}{' '}
            </Text>

            <Text
                style={{fontSize: 20, margin: 10}}>
                    {t('about5')}{' '}
            </Text>

            <Text 
            style={{fontSize: 15, margin: 10}}>
                Versie: 1.01.1
            </Text>

        </View>
    );
}