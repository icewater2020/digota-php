<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sku/skupb/sku.proto

namespace GPBMetadata\Sku\Skupb;

class Sku
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\GithubCom\Gogo\Protobuf\Gogoproto\Gogo::initOnce();
        \GPBMetadata\GithubCom\Digota\Digota\Payment\Paymentpb\Payment::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a8a180a13736b752f736b7570622f736b752e70726f746f1205736b7570" .
            "621a386769746875622e636f6d2f6469676f74612f6469676f74612f7061" .
            "796d656e742f7061796d656e7470622f7061796d656e742e70726f746f22" .
            "070a05656d70747922d2030a03736b75121a0a026964180120012809420e" .
            "f2de1f0a62736f6e3a225f696422120c0a046e616d65180220012809120d" .
            "0a05707269636518032001280412250a0863757272656e63791804200128" .
            "0e32132e7061796d656e7470622e63757272656e6379120e0a0661637469" .
            "7665180520012808120e0a06706172656e74180620012809122a0a086d65" .
            "74616461746118072003280b32182e736b7570622e736b752e4d65746164" .
            "617461456e747279122e0a0a6174747269627574657318082003280b321a" .
            "2e736b7570622e736b752e41747472696275746573456e747279120d0a05" .
            "696d61676518092001280912330a117061636b61676544696d656e73696f" .
            "6e73180a2001280b32182e736b7570622e7061636b61676544696d656e73" .
            "696f6e7312230a09696e76656e746f7279180b2001280b32102e736b7570" .
            "622e696e76656e746f727912100a076372656174656418e6072001280312" .
            "100a077570646174656418e707200128031a2f0a0d4d6574616461746145" .
            "6e747279120b0a036b6579180120012809120d0a0576616c756518022001" .
            "28093a0238011a310a0f41747472696275746573456e747279120b0a036b" .
            "6579180120012809120d0a0576616c75651802200128093a02380122b301" .
            "0a09696e76656e746f727912300a087175616e7469747918012001280342" .
            "1ef2de1f1a76616c69646174653a226f6d6974656d7074792c6774653d30" .
            "2212520a047479706518022001280e32152e736b7570622e696e76656e74" .
            "6f72792e54797065422df2de1f2976616c69646174653a226f6d6974656d" .
            "7074792c72657175697265642c6774653d302c6c74653d312222200a0454" .
            "797065120c0a08496e66696e6974651000120a0a0646696e697465100122" .
            "ca010a117061636b61676544696d656e73696f6e73122c0a066865696768" .
            "74180120012801421cf2de1f1876616c69646174653a2272657175697265" .
            "642c67743d3022122c0a066c656e677468180220012801421cf2de1f1876" .
            "616c69646174653a2272657175697265642c67743d3022122c0a06776569" .
            "676874180320012801421cf2de1f1876616c69646174653a227265717569" .
            "7265642c67743d3022122b0a057769647468180420012801421cf2de1f18" .
            "76616c69646174653a2272657175697265642c67743d3022229e050a0a6e" .
            "657752657175657374122a0a046e616d65180120012809421cf2de1f1876" .
            "616c69646174653a2272657175697265642c67743d302212560a08637572" .
            "72656e637918022001280e32132e7061796d656e7470622e63757272656e" .
            "6379422ff2de1f2b76616c69646174653a226f6d6974656d7074792c7265" .
            "7175697265642c6774653d302c6c74653d3132382212270a066163746976" .
            "651803200128084217f2de1f1376616c69646174653a2272657175697265" .
            "6422122c0a057072696365180420012804421df2de1f1976616c69646174" .
            "653a2272657175697265642c6774653d3022122d0a06706172656e741805" .
            "20012809421df2de1f1976616c69646174653a2272657175697265642c75" .
            "756964342212310a086d6574616461746118062003280b321f2e736b7570" .
            "622e6e6577526571756573742e4d65746164617461456e74727912210a05" .
            "696d6167651807200128094212f2de1f0e76616c69646174653a2275726c" .
            "2212520a117061636b61676544696d656e73696f6e7318082001280b3218" .
            "2e736b7570622e7061636b61676544696d656e73696f6e73421df2de1f19" .
            "76616c69646174653a226f6d6974656d7074792c646976652212410a0969" .
            "6e76656e746f727918092001280b32102e736b7570622e696e76656e746f" .
            "7279421cf2de1f1876616c69646174653a2272657175697265642c646976" .
            "652212350a0a61747472696275746573180a2003280b32212e736b757062" .
            "2e6e6577526571756573742e41747472696275746573456e7472791a2f0a" .
            "0d4d65746164617461456e747279120b0a036b6579180120012809120d0a" .
            "0576616c75651802200128093a0238011a310a0f41747472696275746573" .
            "456e747279120b0a036b6579180120012809120d0a0576616c7565180220" .
            "0128093a02380122370a0a6765745265717565737412290a026964180120" .
            "012809421df2de1f1976616c69646174653a2272657175697265642c7575" .
            "69643422223a0a0d64656c6574655265717565737412290a026964180120" .
            "012809421df2de1f1976616c69646174653a2272657175697265642c7575" .
            "6964342222c7050a0d7570646174655265717565737412290a0269641801" .
            "20012809421df2de1f1976616c69646174653a2272657175697265642c75" .
            "7569643422122b0a046e616d65180220012809421df2de1f1976616c6964" .
            "6174653a226f6d6974656d7074792c67743d302212560a0863757272656e" .
            "637918032001280e32132e7061796d656e7470622e63757272656e637942" .
            "2ff2de1f2b76616c69646174653a226f6d6974656d7074792c7265717569" .
            "7265642c6774653d302c6c74653d31323822120e0a066163746976651804" .
            "20012808122d0a057072696365180520012804421ef2de1f1a76616c6964" .
            "6174653a226f6d6974656d7074792c6774653d3022122e0a06706172656e" .
            "74180620012809421ef2de1f1a76616c69646174653a226f6d6974656d70" .
            "74792c75756964342212340a086d6574616461746118072003280b32222e" .
            "736b7570622e757064617465526571756573742e4d65746164617461456e" .
            "747279122b0a05696d616765180820012809421cf2de1f1876616c696461" .
            "74653a226f6d6974656d7074792c75726c2212520a117061636b61676544" .
            "696d656e73696f6e7318092001280b32182e736b7570622e7061636b6167" .
            "6544696d656e73696f6e73421df2de1f1976616c69646174653a226f6d69" .
            "74656d7074792c646976652212420a09696e76656e746f7279180a200128" .
            "0b32102e736b7570622e696e76656e746f7279421df2de1f1976616c6964" .
            "6174653a226f6d6974656d7074792c646976652212380a0a617474726962" .
            "75746573180b2003280b32242e736b7570622e7570646174655265717565" .
            "73742e41747472696275746573456e7472791a2f0a0d4d65746164617461" .
            "456e747279120b0a036b6579180120012809120d0a0576616c7565180220" .
            "0128093a0238011a310a0f41747472696275746573456e747279120b0a03" .
            "6b6579180120012809120d0a0576616c75651802200128093a0238012234" .
            "0a07736b754c697374121a0a066f726465727318012003280b320a2e736b" .
            "7570622e736b75120d0a05746f74616c18022001280522a8020a0b6c6973" .
            "745265717565737412350a04706167651801200128034227f2de1f237661" .
            "6c69646174653a226f6d6974656d7074792c72657175697265642c677465" .
            "3d302212350a056c696d69741802200128034226f2de1f2276616c696461" .
            "74653a226f6d6974656d7074792c72657175697265642c67743d30221254" .
            "0a04736f727418032001280e32172e736b7570622e6c6973745265717565" .
            "73742e536f7274422df2de1f2976616c69646174653a226f6d6974656d70" .
            "74792c72657175697265642c6774653d302c6c74653d342222550a04536f" .
            "7274120b0a074e61747572616c1000120f0a0b4372656174656444657363" .
            "1001120e0a0a437265617465644173631002120f0a0b5570646174656444" .
            "6573631003120e0a0a55706461746564417363100432e1010a03536b7512" .
            "260a034e657712112e736b7570622e6e6577526571756573741a0a2e736b" .
            "7570622e736b75220012260a0347657412112e736b7570622e6765745265" .
            "71756573741a0a2e736b7570622e736b752200122c0a0655706461746512" .
            "142e736b7570622e757064617465526571756573741a0a2e736b7570622e" .
            "736b752200122e0a0644656c65746512142e736b7570622e64656c657465" .
            "526571756573741a0c2e736b7570622e656d7074792200122c0a044c6973" .
            "7412122e736b7570622e6c697374526571756573741a0e2e736b7570622e" .
            "736b754c697374220042245a226769746875622e636f6d2f6469676f7461" .
            "2f6469676f74612f736b752f736b757062620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

