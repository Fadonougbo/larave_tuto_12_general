import { createRoot } from 'react-dom/client'
import {ConnectedParams, define} from '@mindemangou/magiccomponents'
import {ReactAdapter} from '@mindemangou/magiccomponents-react'
import { useForm } from 'laravel-precognition-react';
import { useActionState, useState } from 'react';
import { useFormStatus } from 'react-dom';
import useSWR from 'swr'


type Data={
    id:number,
    name:string,
    email:string
}


const getData=async (url:string)=>{
    const response=await fetch(url,{
        headers:{
            "Accept":'application/json'
        }
    })

    const data=await response.json()

    return data
}
export const Home=({users})=>{


    // const {submit,errors}=useForm('get','/data',{})

    // const {data,error,isLoading,mutate}=useSWR('/data',getData)

    // console.log(data)
    // const onSubmit=async (formData:FormData)=>{
    //      const res=await submit({adapter:'fetch'})
    //     //console.log(res)
    // }
    // if(error) return 'Fetch Error '
    // if(isLoading) return 'Loading ....'

    // const users=data as Data[]


     const userList=users.map((user)=>(<li key={user.id} >{user.name}</li>))


    // const handleClick=()=>{
    //     mutate([...data,{id:6,name:'gaut',email:'gaut@gaut.com'}])
    // }

    return <>
           

            <ol>{userList}</ol>
            {/* <form action={onSubmit}>
                <input type="text" name="ville" id="" />
                <button>Click me</button>
            </form>
        <h1>Home hello {name} :)</h1> */}

    </> 
}

define({tagname:'home-home',adapter:ReactAdapter},async ({element,props,slots}:ConnectedParams<{users:Data[]}>)=>{
     const response=await fetch('/',{
        headers:{
            "Accept":'application/json',
            "ApiRequest":"yes"
        }
    })

    const data=await response.json()

    //console.log(data) 
     //createRoot(element).render(<Home users={props.users}  />)
})

