import * as React from 'react';
import { useState } from 'react';
import { StyleSheet, Text, Button, View, StatusBar } from 'react-native';
import {en, nl} from './localizations.js';
import * as Localization from 'expo-localization';
import i18n from 'i18n-js';

function home({navigation}) {
    let [locale, setLocale] = useState(Localization.locale);
    i18n.fallbacks = true;
    i18n.translations = {en, nl};
    i18n.locale = locale;
    return(
        <View style={{flex: 1, alignItems: 'center', justifyContent: 'center'}}>
            <Text
                onPress={() => navigation.navigate('Home')}
                style={{fontSize: 26, fontWeight: 'bold'}}> Summa Move!
            </Text>
            {locale !== "en" ? <Button title="English" onPress={() => setLocale("en")} /> : undefined }
            {locale !== "nl" ? <Button title="Nederlands" onPress={() => setLocale("nl")} /> : undefined }
            <Text>{i18n.t('appName')}</Text>
            <Text>{i18n.t('welcome')}</Text>
            <StatusBar style="auto" />
        </View>
    );
}


  export default home;