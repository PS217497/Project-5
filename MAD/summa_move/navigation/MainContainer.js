import * as React from 'react';
import { StatusBar } from 'expo-status-bar';
import { StyleSheet, Text, View } from 'react-native';
import { NavigationContainer } from '@react-navigation/native';
import { createMaterialBottomTabNavigator } from '@react-navigation/material-bottom-tabs';
import oefeningen from './screens/oefeningen';
import about from './screens/about';
import Ionicons from 'react-native-vector-icons/Ionicons';
import home from './screens/home';
import './screens/i18n/i18n';
import { useState } from 'react';
import {useTranslation} from 'react-i18next';
import { MaterialCommunityIcons } from '@expo/vector-icons';

const Tab = createMaterialBottomTabNavigator();

 function MainContainer(){
    const {t, i18n} = useTranslation();
    const [currentLanguage,setLanguage] =useState('en');
    const changeLanguage = value => {
    i18n
      .changeLanguage(value)
      .then(() => setLanguage(value))
      .catch(err => console.log(err));
    };


    return(
    <NavigationContainer>
        <Tab.Navigator>
        <Tab.Screen
        name="home"
        component={home}
        options={{
          tabBarLabel: <Text>{t('home')}{' '}</Text>,
          tabBarIcon: ({ color }) => (
            <MaterialCommunityIcons name="home-outline" color={color} size={26} />
          ),
        }}
      />
      <Tab.Screen
        name="Oefeningen"
        component={oefeningen}
        options={{
          tabBarLabel: <Text>{t('oefening')}{' '}</Text>,
          tabBarIcon: ({ color }) => (
            <Ionicons name="fitness-outline" color={color} size={26} />
          ),
        }}
      />
      <Tab.Screen
        name="About"
        component={about}
        options={{
          tabBarLabel: <Text>{t('about')}{' '}</Text>,
          tabBarIcon: ({ color }) => (
            <Ionicons name="person-outline" color={color} size={26} />
          ),
        }}
      />
    </Tab.Navigator>
        </NavigationContainer>
    );
}

export default MainContainer;