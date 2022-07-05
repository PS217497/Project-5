import { StatusBar } from 'expo-status-bar';
import React from 'react';
import { StyleSheet, Text, View, ActivityIndicator, FlatList, Pressable, Button,RefreshControl,ScrollView } from 'react-native';
import { NavigationContainer } from '@react-navigation/native'; 
import { createStackNavigator } from '@react-navigation/stack';
import './i18n/i18n';
import {useTranslation} from 'react-i18next';
import { useState } from 'react';
import { getBeschrijving} from "./Auto";
let lang ="nl";
const Stack = createStackNavigator();
//stack menu
const  App = ({navigation,route}) => {  
  return (            
    <Stack.Navigator>
        <Stack.Screen
        name= 'Oefeningen Screen'
        component={LoadOefeningen}/>
        <Stack.Screen
        name= 'OefeningenDetails'
        component={LoadOefeningenDetails}/>
    </Stack.Navigator>
  );
}

let DATA;
//hier word de uitleg ingeleden van de oefeningen
const LoadOefeningenDetails = ({route, navigation}) => {
  const [langu,setlang] =useState(route.params.data.instructie_nl);
  let change =route.params.data.instructie_en;
  const changelang =()=>{
    if (lang == "nl"){
      setlang(route.params.data.instructie_nl);
      lang = "en";
      console.log(langu);
    }
    else if (lang == "en"){
      lang = "nl";
      setlang(route.params.data.instructie_en);
    }
  }
    return (
        <View style={{ flex: 1, padding: 20 }}>
            <Text>{langu}</Text>
            <Button title='vertaal' onPress={()=>changelang()}>vertaal</Button>
        </View>
    )
}
//hier worden de oefeningnamen ingeladen met vertaling
const LoadOefeningen = ({navigation}) => {
  getBeschrijving((langu) => {
    console.log("got:" + langu)
    lang = langu;
});
  const [isloading, setLoading] = React.useState(true);
  const loadApi = async () => {
    try {
      const response = await fetch('http://127.0.0.1:8000/api/publicoefeningen')
      const json = await response.json()
      DATA = json
    }
    catch(e) {
      console.error(e)
    }
    finally {
      setLoading(false)
    }
  }
  loadApi();
    if(lang == "en"){
      return (
        <View style={[styles.view]}>
            {isloading ? <ActivityIndicator /> : (
              
            <FlatList
              data={DATA}
              keyExtractor={({ id }, index) => id}
              renderItem={({ item }) => (
                <View style={[styles.infocar]}>
                  <Pressable onPress={() => {navigation.navigate('OefeningenDetails', {data: item})}}>
                    <Text>{item.Name_en}</Text>
                  </Pressable>
                </View>
              )}
            />
          )}
        </View>
    )
    }
    else if (lang == "nl"){
      return (
        <View style={[styles.view]}>
            {isloading ? <ActivityIndicator /> : (
            <FlatList
              data={DATA}
              keyExtractor={({ id }, index) => id}
              renderItem={({ item }) => (
                <View style={[styles.infocar]}>
                  <Pressable onPress={() => {navigation.navigate('OefeningenDetails', {data: item})}}>
                    <Text>{item.Name_nl}</Text>
                  </Pressable>
                </View>
              )}
            />
          )}
        </View>
    ) 
  }
}
//styling van de app
const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
    alignItems: 'center',
    justifyContent: 'center',
  },
  view: {
    padding: 15,
    flex:1,
  },
  btnchng: {
    backgroundColor:"black",
    width:"100%",
    height:20
  },
});


export default App