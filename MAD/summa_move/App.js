import { StatusBar } from 'expo-status-bar';
import { StyleSheet, Text, Button, View } from 'react-native';
import {en, nl} from './localizations';
import { useState } from 'react';
import * as Localization from 'expo-localization';
import i18n from 'i18n-js';
import * as React from 'react';
import MainContainer from './navigation/MainContainer';


function App() {
  
  return(
    <MainContainer/>
  );
  
};

export default App;