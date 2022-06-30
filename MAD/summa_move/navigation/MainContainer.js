import * as React from 'react';
import { NavigationContainer } from '@react-navigation/native';
import { createBottomTabNavigator } from '@react-navigation/bottom-tabs';
import Ionicons from 'react-native-vector-icons/Ionicons';
import oefeningen from './screens/oefeningen';
import about from './screens/about';
import home from './screens/home';
import { MaterialCommunityIcons } from '@expo/vector-icons';



const oefeningenName = 'Oefeningen';
const aboutName = 'About';
const homeName = 'Home';

const Tab = createBottomTabNavigator();


 function MainContainer(){
    return(
        <NavigationContainer>
            <Tab.Navigator
            initialRouteName={homeName}
            screenOptions={({route}) => ({
                tabBarIcon: ({focused, color, size}) => {
                    let iconName;
                    let IconName;
                    let rn = route.name;

                    if (rn === oefeningenName) {
                        iconName = focused ? 'fitness' : 'fitness-outline'
                    }else if (rn === aboutName) {
                        iconName = focused ? 'list' : 'list-outline'
                    }else if (rn === homeName) {
                        iconName = focused ? 'home' : 'home-outline'
                    }

                    return <Ionicons name={iconName} size={size} color={color}/>
                    
                },
            })}
            tabBarOptions={{
                activeTintColor: '#1e90ff ',
                inactiveTintColor: 'grey',
                labelStyle: {paddingBottom: 10, fontSize: 10},
                style: {padding: 10, height: 70}
                
            }}>
            
                <Tab.Screen name={homeName} component={home}/>
                 <Tab.Screen name={oefeningenName} component={oefeningen}/>
                <Tab.Screen name={aboutName} component={about}/>
                

            </Tab.Navigator>
        </NavigationContainer>
    );
}

export default MainContainer;