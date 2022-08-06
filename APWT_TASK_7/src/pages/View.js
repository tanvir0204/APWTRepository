import { useEffect, useState } from "react";
import http from "../http";
import { useNavigate, useParams } from "react-router-dom";

export default function View(props){
    const navigate = useNavigate();
    const [inputs, setInputs] = useState({});
    
    const {id} = useParams();

    useEffect(() => {
        fetchProduct();
    },[]);

    const fetchProduct = () => {
        http.get('/products/'+id+'/edit').then(res => {
            setInputs({
                name: res.data.name,
                slug: res.data.slug,
                price: res.data.price,

            });
        });
    }

  

    return (
        <div>
            <h2>View Product</h2>

            <div className="row">
                <div className="col-sm-6">
                    <div className="card p-4">
                        <h4>Name</h4>
                        <p>{inputs.name}</p>

                        <h4>Slug</h4>
                        <p>{inputs.slug}</p>

                        <h4>Price</h4>
                        <p>{inputs.price}</p>
                    </div>

                </div>


            </div>
        </div>
    )
}