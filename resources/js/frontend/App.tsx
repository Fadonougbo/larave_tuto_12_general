import { createRoot } from 'react-dom/client'
import {define} from '@mindemangou/magiccomponents'
import {ReactAdaptater} from '@mindemangou/magiccomponents-react'
import { useForm } from 'laravel-precognition-react';
import { useActionState, useState } from 'react';
import { useFormStatus } from 'react-dom';

const Home=({name})=>{


    const {data,submit,setData,errors,hasErrors}=useForm('get','/data',{})
        const [mydata,setMyData]=useState(data)

    
    const onSubmit=async (formData:FormData)=>{
         const res=await submit({adapter:'fetch'})
        //console.log(res)
    }
    
    console.log(mydata)

    return <>
            <form action={onSubmit}>
                <input type="text" name="ville" id="" />
                <button>Click me</button>
            </form>
        <h1>Home hello {name} :)</h1>

    </>
}

define({tagname:'home-home',adaptater:ReactAdaptater},({element,props,slots})=>{
    createRoot(element).render(<Home name={props.name}  />)
})

