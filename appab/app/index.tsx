import { View, Text, Image, TouchableOpacity } from 'react-native'
import { StatusBar } from 'expo-status-bar'
import React from 'react'

const index = () => {
  return (
    <View style={{
      backgroundColor:'#FFFFF',
      flex :1
    }}>
      <StatusBar style='auto'/>
      <View style={{
        marginHorizontal:'auto',
        marginVertical: 90,
      }}>
        <Image source={require('../assets/images/1.png')}
        style = {{
          width: 200,
          height:200,
        }}/>
        <Text style={{
          fontSize:23,
          marginHorizontal:"auto",

        }}>
          ABSENSI
        </Text>
        <Text style={{
          fontSize:15,
          marginHorizontal:'auto',
        
          }}>
          ONLINE
        </Text>
      </View>
      <View>
      <Text style={{
              textAlign:'center',
              marginTop:15,
              fontSize:25
            }}>Nama</Text>
                  <Text style={{
              textAlign:'center',
              marginTop:15,
              fontSize:25
            }}>Kelas</Text>
          <TouchableOpacity style={{
            width:50,
            height:50,
            borderRadius:10,
            marginLeft:20,
            backgroundColor:'white'
          }}></TouchableOpacity>
      </View>
    </View>
  )
}

export default index